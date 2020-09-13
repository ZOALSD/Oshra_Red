<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OurWork;
class OurWorkController extends Controller
{
    public function index(){
       
        $works =OurWork::all();
        return view('front.pages.our_work',compact('works'));
    }
}
