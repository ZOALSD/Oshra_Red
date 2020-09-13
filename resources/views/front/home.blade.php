@extends('front.layouts.index')
@foreach ($homes as $home)
@section('Discraption'){{$home->Discraption_site}}@endsection
@section('keyword'){{$home->Key_word}}@endsection

@section('bg_img')
asset/image/content-bg-dark.jpg
@endsection

@section('main_p')
@if (app('l') == 'ar'))
{{ $home->main_preghraph_ar }}
@else
{{ $home->main_preghraph_en }}
@endif
@endsection

@section('sub_p')
@if (app('l') == 'ar'))
{{ $home->sub_preghraph_ar }}
@else
{{ $home->sub_preghraph_en }}
@endif
@endsection
@section('btn')
<button class="btn btn-outline-danger">
  Find Out What We Do &ThinSpace;
  <i class="fas fa-grip-lines-vertical"></i>
  <i class="fas fa-arrow-right"></i>
</button>
@endsection
@section('content')
    
    <!---start section Blog her -->
    <div class="blog bg-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 b-red">
            <h4>Blog</h4>
            <h2>Our impact, news and views</h2>
            <a href="#">
              <h3 class="color h-black">
                To celebrate our 40th Anniversary, join us in our Big40
                fundraising challenge!
              </h3>
            </a>
            <i class="fas fa-arrow-right arrow-artical"></i>
            <a href="" class="color h-black"> read the artical </a>
          </div>
          <div class="col-md-6">
            <img class="img-thumbnail mt-3" src="asset/image/c3.jpg" />
          </div>
        </div>
      </div>
    </div>
    <!---End section Blog her -->

    <!--start--Please donate -->
    <div class="bg-white mt-5 mb-5 p-5">
      <div class="row">
        <div class="f-30 text-center m-auto">
          Please donate. Your contribution
          <br />
          is vital.
        </div>
      </div>
      <br />

      <div class="row">
        <div class="f-30 text-center m-auto">
          <button class="btn btn-outline-secondary">Our respons</button>
          <button class="btn btn-outline-danger">Done now</button>
        </div>
      </div>
    </div>
    <!--End--Please donate -->

    <!--Where we work start her"""==="""" --->
    <br />
    <div class="bg-white">
      <div class="container b-red">
        <div class="f-30">Where we work</div>
        <p class="mw-650 mt-3">
          @if (app('l') =='ar')
          {{$home->Where_we_work_ar}}
          @else
          {{$home->Where_we_work_en}}
          @endif
        </p>

        <i class="fas fa-arrow-right pr-3 mb-3"></i>
        <a href="#" class="color h-black"> Sudan </a>
        <br />
        <i class="fas fa-arrow-right pr-3 mb-3"></i>
        <a href="#" class="color h-black"> Egypt </a>
        <br />
        <i class="fas fa-arrow-right pr-3 mb-3"></i>
        <a href="#" class="color h-black"> USA </a>
      </div>
    </div>

    <!--Where we work end her"""==="""" --->

    <br />
    <div class="container">
      <div class="sudan">
        <img
          src="asset/image/RedR_Pakistan/RedR_Pakistan.jpg"
          class="img-thumbnail"
          alt=""
          srcset=""
        />
      </div>
    </div>
    <br />
    <!--him say About us start-->
    <div class="bg-blue">
      <div class="container b-red">
        <p class="mw-650 text-white f-22">
          @if (app('l') =='ar')
          {{$home->about_say_ar}}
          @else
          {{$home->about_say_en}}
          @endif 
        </p>
        <p class="f-20">
          @if (app('l') =='ar')
          {{$home->write_about_us_ar}}
          @else
          {{$home->write_about_us_en}}
          @endif
        </p>
      </div>
    </div>
    <!--him say About us end-->

    <br />

    <!-- contact with us ------start -->
    <div class="bg-blue contact-us">
      <div class="container p-5">
        <p class="f-30">Sign up to the OSHRA newsletter</p>
        <p>
          Get all the latest news, events and information about upcoming
          training courses from OSHRA
        </p>
        <div class="row">
          <div class="col-lg-3">
            <input
              type="text"
              name=""
              placeholder="first name"
              class="form-control mb-3"
              id=""
            />
          </div>
          <div class="col-lg-3">
            <input
              type="text"
              name=""
              placeholder="laste name"
              class="form-control mb-3"
              id=""
            />
          </div>
          <div class="col-lg-3">
            <input
              type="email"
              name=""
              placeholder="Email"
              class="form-control mb-3"
              id=""
            />
          </div>
          <div class="col-lg3">
            <button class="btn btn-danger">Subscript</button>
          </div>
        </div>
      </div>
    </div>
  
    @endforeach

    @endsection
