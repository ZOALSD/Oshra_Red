<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\BlogsDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Blogs;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class BlogsController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(BlogsDataTable $blogs)
            {
               return $blogs->render('admin.blogs.index',['title'=>trans('admin.blogs')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.blogs.create',['title'=>trans('admin.create')]);
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
             'blog_title_ar'=>'nullable|sometimes|string',
             'blog_title_en'=>'nullable|sometimes|string',
             'blog_ar'=>'required|string',
             'blog_en'=>'required|string',
             'blog_img'=>''.it()->image().'|nullable|sometimes',
             'blog_date'=>'nullable|sometimes|date',
             'Disc'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'img_color'=>'',
             'youtube_link'=>'nullable|sometimes|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'blog_title_ar'=>trans('admin.blog_title_ar'),
             'blog_title_en'=>trans('admin.blog_title_en'),
             'blog_ar'=>trans('admin.blog_ar'),
             'blog_en'=>trans('admin.blog_en'),
             'blog_img'=>trans('admin.blog_img'),
             'blog_date'=>trans('admin.blog_date'),
             'Disc'=>trans('admin.Disc'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'img_color'=>trans('admin.img_color'),
             'youtube_link'=>trans('admin.youtube_link'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('blog_img')){
              $data['blog_img'] = it()->upload('blog_img','blogs');
              }
              Blogs::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('blogs'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $blogs =  Blogs::find($id);
                return view('admin.blogs.show',['title'=>trans('admin.show'),'blogs'=>$blogs]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $blogs =  Blogs::find($id);
                return view('admin.blogs.edit',['title'=>trans('admin.edit'),'blogs'=>$blogs]);
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
             'blog_title_ar'=>'nullable|sometimes|string',
             'blog_title_en'=>'nullable|sometimes|string',
             'blog_ar'=>'required|string',
             'blog_en'=>'required|string',
             'blog_img'=>''.it()->image().'|nullable|sometimes',
             'blog_date'=>'nullable|sometimes|date',
             'Disc'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'img_color'=>'',
             'youtube_link'=>'nullable|sometimes|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'blog_title_ar'=>trans('admin.blog_title_ar'),
             'blog_title_en'=>trans('admin.blog_title_en'),
             'blog_ar'=>trans('admin.blog_ar'),
             'blog_en'=>trans('admin.blog_en'),
             'blog_img'=>trans('admin.blog_img'),
             'blog_date'=>trans('admin.blog_date'),
             'Disc'=>trans('admin.Disc'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'img_color'=>trans('admin.img_color'),
             'youtube_link'=>trans('admin.youtube_link'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('blog_img')){
              it()->delete(Blogs::find($id)->blog_img);
              $data['blog_img'] = it()->upload('blog_img','blogs');
               }
              Blogs::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('blogs'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $blogs = Blogs::find($id);

               it()->delete($blogs->blog_img);
               it()->delete('blogs',$id);

               @$blogs->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$blogs = Blogs::find($id);

                    	it()->delete($blogs->blog_img);
                    	it()->delete('blogs',$id);
                    	@$blogs->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $blogs = Blogs::find($data);
 
                    	it()->delete($blogs->blog_img);
                    	it()->delete('blogs',$data);

                    @$blogs->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}