<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\ConutryDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Country;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class ConutryController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(ConutryDataTable $conutry)
            {
               return $conutry->render('admin.conutry.index',['title'=>trans('admin.conutry')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.conutry.create',['title'=>trans('admin.create')]);
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
             'country_ar'=>'required|string',
             'country_en'=>'required|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'country_ar'=>trans('admin.country_ar'),
             'country_en'=>trans('admin.country_en'),

              ]);
		
              Country::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('conutry'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $conutry =  Country::find($id);
                return view('admin.conutry.show',['title'=>trans('admin.show'),'conutry'=>$conutry]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $conutry =  Country::find($id);
                return view('admin.conutry.edit',['title'=>trans('admin.edit'),'conutry'=>$conutry]);
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
             'country_ar'=>'required|string',
             'country_en'=>'required|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'country_ar'=>trans('admin.country_ar'),
             'country_en'=>trans('admin.country_en'),
                   ]);
              Country::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('conutry'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $conutry = Country::find($id);


               @$conutry->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$conutry = Country::find($id);

                    	@$conutry->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $conutry = Country::find($data);
 

                    @$conutry->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}