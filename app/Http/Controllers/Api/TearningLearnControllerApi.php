<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Tearninglearn;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class TearningLearnControllerApi extends Controller
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
               "data"=>Tearninglearn::orderBy('id','desc')->paginate(15)
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
                         'main_image'=>''.it()->image().'|nullable|sometimes',
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'Desc_search'=>'nullable|sometimes|string',
             'Key_word'=>'nullable|sometimes|string',
             'sup_p_ar'=>'nullable|sometimes|string',
             'sup_p_en'=>'',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
                         'main_image'=>trans('admin.main_image'),
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'Desc_search'=>trans('admin.Desc_search'),
             'Key_word'=>trans('admin.Key_word'),
             'sup_p_ar'=>trans('admin.sup_p_ar'),
             'sup_p_en'=>trans('admin.sup_p_en'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
               if(request()->hasFile('main_image')){
              $data['main_image'] = it()->upload('main_image','tearninglearn');
              }
        $create = Tearninglearn::create($data); 

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
                $show =  Tearninglearn::find($id);
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
             'main_image'=>''.it()->image().'|nullable|sometimes',
             'main_p_ar'=>'nullable|sometimes|string',
             'main_p_en'=>'nullable|sometimes|string',
             'Desc_search'=>'nullable|sometimes|string',
             'Key_word'=>'nullable|sometimes|string',
             'sup_p_ar'=>'nullable|sometimes|string',
             'sup_p_en'=>'',

                         ];
             $data = Validator::make(request()->all(),$rules,[],[
             'main_image'=>trans('admin.main_image'),
             'main_p_ar'=>trans('admin.main_p_ar'),
             'main_p_en'=>trans('admin.main_p_en'),
             'Desc_search'=>trans('admin.Desc_search'),
             'Key_word'=>trans('admin.Key_word'),
             'sup_p_ar'=>trans('admin.sup_p_ar'),
             'sup_p_en'=>trans('admin.sup_p_en'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
               if(request()->hasFile('main_image')){
              it()->delete(Tearninglearn::find($id)->main_image);
              $data['main_image'] = it()->upload('main_image','tearninglearn');
               }
              Tearninglearn::where('id',$id)->update($data);

              $Tearninglearn = Tearninglearn::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $Tearninglearn
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
               $tearninglearn = Tearninglearn::find($id);

               it()->delete($tearninglearn->main_image);
               it()->delete('tearninglearn',$id);

               @$tearninglearn->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$tearninglearn = Tearninglearn::find($id);

                    	it()->delete($tearninglearn->main_image);
                    	it()->delete('tearninglearn',$id);
                    	@$tearninglearn->delete();
                    }
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $tearninglearn = Tearninglearn::find($data);
 
                    	it()->delete($tearninglearn->main_image);
                    	it()->delete('tearninglearn',$data);

                    @$tearninglearn->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}