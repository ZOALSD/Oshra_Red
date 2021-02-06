<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Model\Causes;
use App\Model\OurWork;

class OurWorkController extends Controller
{
    public function index()
    {

        $causes = Causes::select('id', 'title_ar', 'image', 'title_en', 'disc_ar', 'disc_en')->OrderBy('id', 'desc')->paginate(6);
        $works = OurWork::OrderBy('id', 'desc')->limit(1)->get();
        return view('front.pages.our_work', compact('works', 'causes'));
    }

    public function show($id)
    {
        $cause = Causes::where('id', $id)->get();
        return \view('front.pages.cause', compact('cause'));
    }
}
