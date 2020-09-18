<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\BlogsBageDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\BlogsBage;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class BlogsBageController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(BlogsBageDataTable $blogsbage)
            {
               return $blogsbage->render('admin.blogsbage.index',['title'=>trans('admin.blogsbage')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.blogsbage.create',['title'=>trans('admin.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function store()
            {
              $rules = [
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'sub_p_ar'=>'nullable|sometimes|string',
             'sub_p_en'=>'',
             'slide_image'=>''.it()->image().'|nullable|sometimes',
             'other_image'=>''.it()->image().'|nullable|sometimes',
             'youtube_link'=>'nullable|sometimes|string',
             'disc'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'image_color'=>'nullable|sometimes|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'sub_p_ar'=>trans('admin.sub_p_ar'),
             'sub_p_en'=>trans('admin.sub_p_en'),
             'slide_image'=>trans('admin.slide_image'),
             'other_image'=>trans('admin.other_image'),
             'youtube_link'=>trans('admin.youtube_link'),
             'disc'=>trans('admin.disc'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'image_color'=>trans('admin.image_color'),

              ]);
		
               if(request()->hasFile('slide_image')){
              $data['slide_image'] = it()->upload('slide_image','blogsbage');
              }
               if(request()->hasFile('other_image')){
              $data['other_image'] = it()->upload('other_image','blogsbage');
              }
              BlogsBage::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('blogsbage'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $blogsbage =  BlogsBage::find($id);
                return view('admin.blogsbage.show',['title'=>trans('admin.show'),'blogsbage'=>$blogsbage]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $blogsbage =  BlogsBage::find($id);
                return view('admin.blogsbage.edit',['title'=>trans('admin.edit'),'blogsbage'=>$blogsbage]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id)
            {
                $rules = [
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'sub_p_ar'=>'nullable|sometimes|string',
             'sub_p_en'=>'',
             'slide_image'=>''.it()->image().'|nullable|sometimes',
             'other_image'=>''.it()->image().'|nullable|sometimes',
             'youtube_link'=>'nullable|sometimes|string',
             'disc'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'image_color'=>'nullable|sometimes|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'sub_p_ar'=>trans('admin.sub_p_ar'),
             'sub_p_en'=>trans('admin.sub_p_en'),
             'slide_image'=>trans('admin.slide_image'),
             'other_image'=>trans('admin.other_image'),
             'youtube_link'=>trans('admin.youtube_link'),
             'disc'=>trans('admin.disc'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'image_color'=>trans('admin.image_color'),
                   ]);
               if(request()->hasFile('slide_image')){
              it()->delete(BlogsBage::find($id)->slide_image);
              $data['slide_image'] = it()->upload('slide_image','blogsbage');
               }
               if(request()->hasFile('other_image')){
              it()->delete(BlogsBage::find($id)->other_image);
              $data['other_image'] = it()->upload('other_image','blogsbage');
               }
              BlogsBage::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('blogsbage'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $blogsbage = BlogsBage::find($id);

               it()->delete($blogsbage->slide_image);
               it()->delete('blogsbage',$id);
               it()->delete($blogsbage->other_image);
               it()->delete('blogsbage',$id);

               @$blogsbage->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$blogsbage = BlogsBage::find($id);

                    	it()->delete($blogsbage->slide_image);
                    	it()->delete('blogsbage',$id);
                    	it()->delete($blogsbage->other_image);
                    	it()->delete('blogsbage',$id);
                    	@$blogsbage->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $blogsbage = BlogsBage::find($data);
 
                    	it()->delete($blogsbage->slide_image);
                    	it()->delete('blogsbage',$data);
                    	it()->delete($blogsbage->other_image);
                    	it()->delete('blogsbage',$data);

                    @$blogsbage->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}