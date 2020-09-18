<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\HomePage;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class HomePageControllerApi extends Controller
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
               "data"=>HomePage::orderBy('id','desc')->paginate(15)
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
                         'main_preghraph_ar'=>'required|string',
             'main_preghraph_en'=>'required|string',
             'sub_preghraph_ar'=>'',
             'sub_preghraph_en'=>'required|string',
             'Where_we_work_ar'=>'required|string',
             'Where_we_work_en'=>'nullable|sometimes|string',
             'about_say_ar'=>'nullable|sometimes|string',
             'about_say_en'=>'nullable|sometimes|string',
             'write_about_us_ar'=>'nullable|sometimes|string',
             'write_about_us_en'=>'nullable|sometimes|string',
             'Key_word'=>'required|string',
             'Discraption_site'=>'',
        ];
        $data = Validator::make(request()->all(),$rules,[],[
                         'main_preghraph_ar'=>trans('admin.main_preghraph_ar'),
             'main_preghraph_en'=>trans('admin.main_preghraph_en'),
             'sub_preghraph_ar'=>trans('admin.sub_preghraph_ar'),
             'sub_preghraph_en'=>trans('admin.sub_preghraph_en'),
             'Where_we_work_ar'=>trans('admin.Where_we_work_ar'),
             'Where_we_work_en'=>trans('admin.Where_we_work_en'),
             'about_say_ar'=>trans('admin.about_say_ar'),
             'about_say_en'=>trans('admin.about_say_en'),
             'write_about_us_ar'=>trans('admin.write_about_us_ar'),
             'write_about_us_en'=>trans('admin.write_about_us_en'),
             'Key_word'=>trans('admin.Key_word'),
             'Discraption_site'=>trans('admin.Discraption_site'),
        ]);
		
        if($data->fails()){
            return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
            ]); 
             }
        $data = request()->except(["_token"]);
        $create = HomePage::create($data); 

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
                $show =  HomePage::find($id);
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
             'main_preghraph_ar'=>'required|string',
             'main_preghraph_en'=>'required|string',
             'sub_preghraph_ar'=>'',
             'sub_preghraph_en'=>'required|string',
             'Where_we_work_ar'=>'required|string',
             'Where_we_work_en'=>'nullable|sometimes|string',
             'about_say_ar'=>'nullable|sometimes|string',
             'about_say_en'=>'nullable|sometimes|string',
             'write_about_us_ar'=>'nullable|sometimes|string',
             'write_about_us_en'=>'nullable|sometimes|string',
             'Key_word'=>'required|string',
             'Discraption_site'=>'',

                         ];
             $data = Validator::make(request()->all(),$rules,[],[
             'main_preghraph_ar'=>trans('admin.main_preghraph_ar'),
             'main_preghraph_en'=>trans('admin.main_preghraph_en'),
             'sub_preghraph_ar'=>trans('admin.sub_preghraph_ar'),
             'sub_preghraph_en'=>trans('admin.sub_preghraph_en'),
             'Where_we_work_ar'=>trans('admin.Where_we_work_ar'),
             'Where_we_work_en'=>trans('admin.Where_we_work_en'),
             'about_say_ar'=>trans('admin.about_say_ar'),
             'about_say_en'=>trans('admin.about_say_en'),
             'write_about_us_ar'=>trans('admin.write_about_us_ar'),
             'write_about_us_en'=>trans('admin.write_about_us_en'),
             'Key_word'=>trans('admin.Key_word'),
             'Discraption_site'=>trans('admin.Discraption_site'),
                   ]);
             if($data->fails()){
             return response()->json([
               "status"=>false,"
               messages"=>$data->messages()
               ]); 
             }
             $data = request()->except(["_token"]);
              HomePage::where('id',$id)->update($data);

              $HomePage = HomePage::find($id);

              return response()->json([
               "status"=>true,
               "message"=>trans('admin.updated'),
               "data"=> $HomePage
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
               $homepage = HomePage::find($id);


               @$homepage->delete();
               return response(["status"=>true,"message"=>trans('admin.deleted')]);
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$homepage = HomePage::find($id);

                    	@$homepage->delete();
                    }
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }else {
                    $homepage = HomePage::find($data);
 

                    @$homepage->delete();
                    return response(["status"=>true,"message"=>trans('admin.deleted')]);
                }
            }

            
}