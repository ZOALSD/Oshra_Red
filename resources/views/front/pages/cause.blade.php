@extends('front.layouts.index')
@foreach ($cause as $i)

@section('bg_img')
    {{ it()->url($i->image) }}
@endsection

@section('p_color')
    {{ $i->p_color }}
@endsection

@section('main_p')
    @if (app('l') == 'ar')
         {{ $i->title_ar }}
    @else
        
        {{ $i->title_en}}    
@endif
    @endsection

@section('sub_p')
@if (app('l') == 'ar')
{{ $i->title_ar }}
@else

{{ $i->title_en}}    
@endif
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('OurWork') }}">Our Work</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cause</li>
    </ol>
  </nav>

@endsection



@section('content')
<div class=" bg-img-light">
<div class="container">
      <p class="mw-650 text-white f-22 b-red black">
        @if (app('l') =='ar')
        {{$i->disc_ar}}
        @else
        {{$i->disc_en}}
        @endif 
      </p>

  </div>
</div>
@endsection

@endforeach
