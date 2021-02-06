<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Tearninglearn;
use Form;
use Illuminate\Http\Request;
use Up;

// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class TearningLearnController extends Controller
{

    // /**
    //  * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
    //  * Display a listing of the resource.
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index(TearningLearnDataTable $tearninglearn)
    // {
    //    return $tearninglearn->render('admin.tearninglearn.index',['title'=>trans('admin.tearninglearn')]);
    // }

    // /**
    //  * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
    //  * Show the form for creating a new resource.
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //    return view('admin.tearninglearn.create',['title'=>trans('admin.create')]);
    // }

    // /**
    //  * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
    //  * Store a newly created resource in storage.
    //  * @param  \Illuminate\Http\Request  $r
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store()
    // {
    //   $rules = [
    //  'main_image'=>''.it()->image().'|nullable|sometimes',
    //  'main_p_ar'=>'nullable|sometimes|string',
    //  'main_p_en'=>'nullable|sometimes|string',
    //  'Desc_search'=>'nullable|sometimes|string',
    //  'Key_word'=>'nullable|sometimes|string',
    //  'sup_p_ar'=>'nullable|sometimes|string',
    //  'sup_p_en'=>'',

    //        ];
    //   $data = $this->validate(request(),$rules,[],[
    //  'main_image'=>trans('admin.main_image'),
    //  'main_p_ar'=>trans('admin.main_p_ar'),
    //  'main_p_en'=>trans('admin.main_p_en'),
    //  'Desc_search'=>trans('admin.Desc_search'),
    //  'Key_word'=>trans('admin.Key_word'),
    //  'sup_p_ar'=>trans('admin.sup_p_ar'),
    //  'sup_p_en'=>trans('admin.sup_p_en'),

    //   ]);

    //    if(request()->hasFile('main_image')){
    //   $data['main_image'] = it()->upload('main_image','tearninglearn');
    //   }
    //   Tearninglearn::create($data);

    //   session()->flash('success',trans('admin.added'));
    //   return redirect(aurl('tearninglearn'));
    // }

    // /**
    //  * Display the specified resource.
    //  * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $tearninglearn =  Tearninglearn::find($id);
    //     return view('admin.tearninglearn.show',['title'=>trans('admin.show'),'tearninglearn'=>$tearninglearn]);
    // }

    /**
     * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
     * edit the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tearninglearn = Tearninglearn::find($id);
        return view('admin.tearninglearn.edit', ['title' => trans('admin.edit'), 'tearninglearn' => $tearninglearn]);
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
            'main_image' => '' . it()->image() . '|nullable|sometimes',
            'main_p_ar' => 'nullable|sometimes|string',
            'main_p_en' => 'nullable|sometimes|string',
            'Desc_search' => 'nullable|sometimes|string',
            'Key_word' => 'nullable|sometimes|string',
            'sup_p_ar' => 'nullable|sometimes|string',
            'sup_p_en' => '',

        ];
        $data = $this->validate(request(), $rules, [], [
            'main_image' => trans('admin.main_image'),
            'main_p_ar' => trans('admin.main_p_ar'),
            'main_p_en' => trans('admin.main_p_en'),
            'Desc_search' => trans('admin.Desc_search'),
            'Key_word' => trans('admin.Key_word'),
            'sup_p_ar' => trans('admin.sup_p_ar'),
            'sup_p_en' => trans('admin.sup_p_en'),
        ]);
        if (request()->hasFile('main_image')) {
            it()->delete(Tearninglearn::find($id)->main_image);
            $data['main_image'] = it()->upload('main_image', 'tearninglearn');
        }
        Tearninglearn::where('id', $id)->update($data);

        session()->flash('success', trans('admin.updated'));
        return redirect(aurl('/'));
    }

    // /**
    //  * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
    //  * destroy a newly created resource in storage.
    //  * @param  \Illuminate\Http\Request  $r
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //    $tearninglearn = Tearninglearn::find($id);

    //    it()->delete($tearninglearn->main_image);
    //    it()->delete('tearninglearn',$id);

    //    @$tearninglearn->delete();
    //    session()->flash('success',trans('admin.deleted'));
    //    return back();
    // }

    // public function multi_delete(Request $r)
    // {
    //     $data = $r->input('selected_data');
    //     if(is_array($data)){
    //         foreach($data as $id)
    //         {
    //             $tearninglearn = Tearninglearn::find($id);

    //             it()->delete($tearninglearn->main_image);
    //             it()->delete('tearninglearn',$id);
    //             @$tearninglearn->delete();
    //         }
    //         session()->flash('success', trans('admin.deleted'));
    //        return back();
    //     }else {
    //         $tearninglearn = Tearninglearn::find($data);

    //             it()->delete($tearninglearn->main_image);
    //             it()->delete('tearninglearn',$data);

    //         @$tearninglearn->delete();
    //         session()->flash('success', trans('admin.deleted'));
    //         return back();
    //     }
    // }

}
