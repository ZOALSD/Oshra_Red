<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Causes;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class CausesControllerApi extends Controller
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
               "data"=>Causes::orderBy('id','desc')->paginate(15)
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
                         'title_ar'=>'required|string',
             'title_en'=>'required|string',
             'disc_ar'=>'required|string',
             'disc_en'=>'required|string',
             'country_id'=>'numeric|nullable|sometimes',
             'city_id'=>'numeric|nullable|sometimes',
             'cause_data'=>'nullable|sometimes|date',
             'category_id'=>'numeric|nullable|sometimes',
             'disc_page'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'img_color'=>'nullable|sometimes|string',
             'image'=>''.it()->image().'|nullable|sometimes',
             'YouTube_link'=>'nullable|sometimes|string',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
                         'title_ar'=>trans('admin.title_ar'),
             'title_en'=>trans('admin.title_en'),
             'disc_ar'=>trans('admin.disc_ar'),
             'disc_en'=>trans('admin.disc_en'),
             'country_id'=>trans('admin.country_id'),
             'city_id'=>trans('admin.city_id'),
             'cause_data'=>trans('admin.cause_data'),
             'category_id'=>trans('admin.category_id'),
             'disc_page'=>trans('admin.disc_page'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'img_color'=>trans('admin.img_color'),
             'image'=>trans('admin.image'),
             'YouTube_link'=>trans('admin.YouTube_link'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
               if(request()->hasFile('image')){
              $data['image'] = it()->upload('image','causes');
              }
        $create = Causes::create($data); 

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
                $show =  Causes::find($id);
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
             'title_ar'=>'required|string',
             'title_en'=>'required|string',
             'disc_ar'=>'required|string',
             'disc_en'=>'required|string',
             'country_id'=>'numeric|nullable|sometimes',
             'city_id'=>'numeric|nullable|sometimes',
             'cause_data'=>'nullable|sometimes|date',
             'category_id'=>'numeric|nullable|sometimes',
             'disc_page'=>'nullable|sometimes|string',
             'keyword'=>'nullable|sometimes|string',
             'p_color'=>'nullable|sometimes|string',
             'img_color'=>'nullable|sometimes|string',
             'image'=>''.it()->image().'|nullable|sometimes',
             'YouTube_link'=>'nullable|sometimes|string',

                         ];
             $data = Validator::make(request()->all(),$rules,[],[
             'title_ar'=>trans('admin.title_ar'),
             'title_en'=>trans('admin.title_en'),
             'disc_ar'=>trans('admin.disc_ar'),
             'disc_en'=>trans('admin.disc_en'),
             'country_id'=>trans('admin.country_id'),
             'city_id'=>trans('admin.city_id'),
             'cause_data'=>trans('admin.cause_data'),
             'category_id'=>trans('admin.category_id'),
             'disc_page'=>trans('admin.disc_page'),
             'keyword'=>trans('admin.keyword'),
             'p_color'=>trans('admin.p_color'),
             'img_color'=>trans('admin.img_color'),
             'image'=>trans('admin.image'),
             'YouTube_link'=>trans('admin.YouTube_link'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
               if(request()->hasFile('image')){
              it()->delete(Causes::find($id)->image);
              $data['image'] = it()->upload('image','causes');
               }
              Causes::where('id',$id)->update($data);

              $Causes = Causes::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Causes
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
               $causes = Causes::find($id);

               it()->delete($causes->image);
               it()->delete('causes',$id);

               @$causes->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$causes = Causes::find($id);

                    	it()->delete($causes->image);
                    	it()->delete('causes',$id);
                    	@$causes->delete();
                    }
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $causes = Causes::find($data);
 
                    	it()->delete($causes->image);
                    	it()->delete('causes',$data);

                    @$causes->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}