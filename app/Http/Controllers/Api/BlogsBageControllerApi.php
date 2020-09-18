<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

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
class BlogsBageControllerApi extends Controller
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
               "data"=>BlogsBage::orderBy('id','desc')->paginate(15)
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
        $data = Validator::make(request()->all(),$rules,[],[
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
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
               if(request()->hasFile('slide_image')){
              $data['slide_image'] = it()->upload('slide_image','blogsbage');
              }
               if(request()->hasFile('other_image')){
              $data['other_image'] = it()->upload('other_image','blogsbage');
              }
        $create = BlogsBage::create($data); 

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
                $show =  BlogsBage::find($id);
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
             $data = Validator::make(request()->all(),$rules,[],[
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
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
               if(request()->hasFile('slide_image')){
              it()->delete(BlogsBage::find($id)->slide_image);
              $data['slide_image'] = it()->upload('slide_image','blogsbage');
               }
               if(request()->hasFile('other_image')){
              it()->delete(BlogsBage::find($id)->other_image);
              $data['other_image'] = it()->upload('other_image','blogsbage');
               }
              BlogsBage::where('id',$id)->update($data);

              $BlogsBage = BlogsBage::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $BlogsBage
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
               $blogsbage = BlogsBage::find($id);

               it()->delete($blogsbage->slide_image);
               it()->delete('blogsbage',$id);
               it()->delete($blogsbage->other_image);
               it()->delete('blogsbage',$id);

               @$blogsbage->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
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
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $blogsbage = BlogsBage::find($data);
 
                    	it()->delete($blogsbage->slide_image);
                    	it()->delete('blogsbage',$data);
                    	it()->delete($blogsbage->other_image);
                    	it()->delete('blogsbage',$data);

                    @$blogsbage->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}