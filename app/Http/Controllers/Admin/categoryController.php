<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\categoryDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\category;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class categoryController extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(categoryDataTable $category)
            {
               return $category->render('admin.category.index',['title'=>trans('admin.category')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.category.create',['title'=>trans('admin.create')]);
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
             'category_ar'=>'required|string',
             'category_en'=>'required|string',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'category_ar'=>trans('admin.category_ar'),
             'category_en'=>trans('admin.category_en'),

              ]);
		
              category::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('category'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $category =  category::find($id);
                return view('admin.category.show',['title'=>trans('admin.show'),'category'=>$category]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $category =  category::find($id);
                return view('admin.category.edit',['title'=>trans('admin.edit'),'category'=>$category]);
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
             'category_ar'=>'required|string',
             'category_en'=>'required|string',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'category_ar'=>trans('admin.category_ar'),
             'category_en'=>trans('admin.category_en'),
                   ]);
              category::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('category'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $category = category::find($id);


               @$category->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$category = category::find($id);

                    	@$category->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $category = category::find($data);
 

                    @$category->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}