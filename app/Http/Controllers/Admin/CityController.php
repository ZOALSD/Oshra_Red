<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\CityDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\City;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class CityController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(CityDataTable $city)
            {
               return $city->render('admin.city.index',['title'=>trans('admin.city')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.city.create',['title'=>trans('admin.create')]);
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
             'conutry_id'=>'required|numeric',
             'city_ar'=>'required|string',
             'city_en'=>'required|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'conutry_id'=>trans('admin.conutry_id'),
             'city_ar'=>trans('admin.city_ar'),
             'city_en'=>trans('admin.city_en'),

              ]);
		
              City::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('city'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $city =  City::find($id);
                return view('admin.city.show',['title'=>trans('admin.show'),'city'=>$city]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $city =  City::find($id);
                return view('admin.city.edit',['title'=>trans('admin.edit'),'city'=>$city]);
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
             'conutry_id'=>'required|numeric',
             'city_ar'=>'required|string',
             'city_en'=>'required|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'conutry_id'=>trans('admin.conutry_id'),
             'city_ar'=>trans('admin.city_ar'),
             'city_en'=>trans('admin.city_en'),
                   ]);
              City::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('city'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $city = City::find($id);


               @$city->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$city = City::find($id);

                    	@$city->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $city = City::find($data);
 

                    @$city->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}