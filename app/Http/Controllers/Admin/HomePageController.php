<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\HomePageDataTable;
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
class HomePageController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(HomePageDataTable $homepage)
            {
               return $homepage->render('admin.homepage.index',['title'=>trans('admin.homepage')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.homepage.create',['title'=>trans('admin.create')]);
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
              $data = $this->validate(request(),$rules,[],[
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
		
              HomePage::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('homepage'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $homepage =  HomePage::find($id);
                return view('admin.homepage.show',['title'=>trans('admin.show'),'homepage'=>$homepage]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $homepage =  HomePage::find($id);
                return view('admin.homepage.edit',['title'=>trans('admin.edit'),'homepage'=>$homepage]);
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
             $data = $this->validate(request(),$rules,[],[
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
              HomePage::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('/'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $homepage = HomePage::find($id);


               @$homepage->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
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
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $homepage = HomePage::find($data);
 

                    @$homepage->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}