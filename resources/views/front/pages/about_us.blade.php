@extends('front.layouts.index')

@section('bg_img')
     ../asset/image/content-bg-dark.jpg
     
@endsection

@section('p_color')

@endsection

@section('main_p')

About  <br>
ORGANIZATION OF SUDANESE HUMAN RIGHTS ABROAD
    @if (app('l') == 'ar')
    @else
        
@endif
@endsection



@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
  </nav>

@endsection



@section('content')


 <!--him say About us start-->
 <div class=" bg-img-light">
    <div class="container b-red">
      <p class="mw-650 f-22">
        We deliver humanitarian training and support around the world working primarily in developing countries that are prone to or have been affected by major natural disasters or conflict. We have regional programme offices in the UK, Jordan and Sudan. We deliver training, consultancy services and expert support globally.
        We deliver humanitarian training and support around the world working primarily in developing countries that are prone to or have been affected by major natural disasters or conflict. We have regional programme offices in the UK, Jordan and Sudan. We deliver training, consultancy services and expert support globally. 
      </p>
      <p class="f-20">
       
      </p>
    </div>
  </div>
  <br>
  <!--him say About us end-->

@endsection

