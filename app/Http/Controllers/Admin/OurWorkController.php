<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\OurWorkDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\OurWork;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class OurWorkController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(OurWorkDataTable $ourwork)
            {
               return $ourwork->render('admin.ourwork.index',['title'=>trans('admin.ourwork')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.ourwork.create',['title'=>trans('admin.create')]);
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
             'main_imig'=>''.it()->image().'|nullable|sometimes',
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'sub_p_ar'=>'nullable|sometimes|string',
             'sub_p_en'=>'nullable|sometimes|string',
             'what_our_do_ar'=>'nullable|sometimes|string',
             'what_our_do_en'=>'nullable|sometimes|string',
             'what_our_do_img'=>''.it()->image().'|nullable|sometimes',
             'why_oshra_unique_ar'=>'nullable|sometimes|string',
             'why_oshra_unique_en'=>'nullable|sometimes|string',
             'why_oshra_unique_img'=>'nullable|sometimes|string',
             'page_description'=>'nullable|sometimes|string',
             'key_Word'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'main_imig'=>trans('admin.main_imig'),
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'sub_p_ar'=>trans('admin.sub_p_ar'),
             'sub_p_en'=>trans('admin.sub_p_en'),
             'what_our_do_ar'=>trans('admin.what_our_do_ar'),
             'what_our_do_en'=>trans('admin.what_our_do_en'),
             'what_our_do_img'=>trans('admin.what_our_do_img'),
             'why_oshra_unique_ar'=>trans('admin.why_oshra_unique_ar'),
             'why_oshra_unique_en'=>trans('admin.why_oshra_unique_en'),
             'why_oshra_unique_img'=>trans('admin.why_oshra_unique_img'),
             'page_description'=>trans('admin.page_description'),
             'key_Word'=>trans('admin.key_Word'),
             'p_color'=>trans('admin.p_color'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('main_imig')){
              $data['main_imig'] = it()->upload('main_imig','ourwork');
              }
               if(request()->hasFile('what_our_do_img')){
              $data['what_our_do_img'] = it()->upload('what_our_do_img','ourwork');
              }
               if(request()->hasFile('why_oshra_unique_img')){
              $data['why_oshra_unique_img'] = it()->upload('why_oshra_unique_img','ourwork');
              }
              OurWork::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('ourwork'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $ourwork =  OurWork::find($id);
                return view('admin.ourwork.show',['title'=>trans('admin.show'),'ourwork'=>$ourwork]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $ourwork =  OurWork::find($id);
                return view('admin.ourwork.edit',['title'=>trans('admin.edit'),'ourwork'=>$ourwork]);
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
             'main_imig'=>''.it()->image().'|nullable|sometimes',
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'sub_p_ar'=>'nullable|sometimes|string',
             'sub_p_en'=>'nullable|sometimes|string',
             'what_our_do_ar'=>'nullable|sometimes|string',
             'what_our_do_en'=>'nullable|sometimes|string',
             'what_our_do_img'=>''.it()->image().'|nullable|sometimes',
             'why_oshra_unique_ar'=>'nullable|sometimes|string',
             'why_oshra_unique_en'=>'nullable|sometimes|string',
             'why_oshra_unique_img'=>'nullable|sometimes|string',
             'page_description'=>'nullable|sometimes|string',
             'key_Word'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'main_imig'=>trans('admin.main_imig'),
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'sub_p_ar'=>trans('admin.sub_p_ar'),
             'sub_p_en'=>trans('admin.sub_p_en'),
             'what_our_do_ar'=>trans('admin.what_our_do_ar'),
             'what_our_do_en'=>trans('admin.what_our_do_en'),
             'what_our_do_img'=>trans('admin.what_our_do_img'),
             'why_oshra_unique_ar'=>trans('admin.why_oshra_unique_ar'),
             'why_oshra_unique_en'=>trans('admin.why_oshra_unique_en'),
             'why_oshra_unique_img'=>trans('admin.why_oshra_unique_img'),
             'page_description'=>trans('admin.page_description'),
             'key_Word'=>trans('admin.key_Word'),
             'p_color'=>trans('admin.p_color'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('main_imig')){
              it()->delete(OurWork::find($id)->main_imig);
              $data['main_imig'] = it()->upload('main_imig','ourwork');
               }
               if(request()->hasFile('what_our_do_img')){
              it()->delete(OurWork::find($id)->what_our_do_img);
              $data['what_our_do_img'] = it()->upload('what_our_do_img','ourwork');
               }
               if(request()->hasFile('why_oshra_unique_img')){
              it()->delete(OurWork::find($id)->why_oshra_unique_img);
              $data['why_oshra_unique_img'] = it()->upload('why_oshra_unique_img','ourwork');
               }
              OurWork::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('ourwork'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $ourwork = OurWork::find($id);

               it()->delete($ourwork->main_imig);
               it()->delete('ourwork',$id);
               it()->delete($ourwork->what_our_do_img);
               it()->delete('ourwork',$id);
               it()->delete($ourwork->why_oshra_unique_img);
               it()->delete('ourwork',$id);

               @$ourwork->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$ourwork = OurWork::find($id);

                    	it()->delete($ourwork->main_imig);
                    	it()->delete('ourwork',$id);
                    	it()->delete($ourwork->what_our_do_img);
                    	it()->delete('ourwork',$id);
                    	it()->delete($ourwork->why_oshra_unique_img);
                    	it()->delete('ourwork',$id);
                    	@$ourwork->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $ourwork = OurWork::find($data);
 
                    	it()->delete($ourwork->main_imig);
                    	it()->delete('ourwork',$data);
                    	it()->delete($ourwork->what_our_do_img);
                    	it()->delete('ourwork',$data);
                    	it()->delete($ourwork->why_oshra_unique_img);
                    	it()->delete('ourwork',$data);

                    @$ourwork->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}