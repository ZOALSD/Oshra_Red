<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

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
class BlogsControllerApi extends Controller
{

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Display a listing of the resource. Api
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
               return response()->json([
               "status"=>true,
               "data"=>Blogs::orderBy('id','desc')->paginate(15)
               ]);
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * Store a newly created resource in storage. Api
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
        $data = Validator::make(request()->all(),$rules,[],[
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
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('blog_img')){
              $data['blog_img'] = it()->upload('blog_img','blogs');
              }
        $create = Blogs::create($data); 

        return response()->json([
            "status"=>true,
            "message"=>trans('admin.added'),
            "data"=>$create
        ]);
    }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $show =  Blogs::find($id);
                 return response()->json([
              "status"=>true,
              "data"=> $show
              ]);  ;
            }


            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
             $data = Validator::make(request()->all(),$rules,[],[
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
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
              $data['user_id'] = auth()->user()->id; 
               if(request()->hasFile('blog_img')){
              it()->delete(Blogs::find($id)->blog_img);
              $data['blog_img'] = it()->upload('blog_img','blogs');
               }
              Blogs::where('id',$id)->update($data);

              $Blogs = Blogs::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Blogs
               ]);
            }

            /**
             * Baboon Script By [It V 1.2 | https://it.phpanonymous.com]
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
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
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
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $blogs = Blogs::find($data);
 
                    	it()->delete($blogs->blog_img);
                    	it()->delete('blogs',$data);

                    @$blogs->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}