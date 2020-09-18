<?php

namespace App\Http\Controllers\front;

use App\Model\Blogs;
use App\Model\BlogsBage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index(){
       
          $Blogs=Blogs::select('id','blog_title_ar','blog_title_en','blog_ar','blog_en')->OrderBy('id','desc')->paginate(6);
            $BlogsBage =BlogsBage::OrderBy('id','desc')->limit(1)->get();
        return view('front.pages.blogs',compact('BlogsBage','Blogs'));
    }

    public function show($id){
            $blogs=Blogs::where('id',$id)->get();
        return \view('front.pages.blog',compact('blogs'));
    }
}
