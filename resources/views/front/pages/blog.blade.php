@extends('front.layouts.index')
@foreach ($blogs as $i)

@section('bg_img')
     @if (empty($i->blog_img))
     ../asset/image/content-bg-dark.jpg
     @else
     {{ it()->url($i->blog_img) }}
     @endif
@endsection

@section('p_color')
    {{ $i->p_color }}
@endsection

@section('main_p')
    @if (app('l') == 'ar')
         {{ $i->blog_title_ar }}
    @else
        
        {{ $i->blog_title_en}}    
@endif
    @endsection

@section('')
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
      <li class="breadcrumb-item"><a href="{{ route('BlogBage') }}">Blogs</a></li>
      <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
  </nav>

@endsection



@section('content')
<div class=" bg-img-light">
<div class="container">
      <p class="mw-650 text-white f-22 b-red black">
        @if (app('l') =='ar')
        {{$i->blog_ar}}
        @else
        {{$i->blog_en}}
        @endif 
      </p>

<div class="text-center wdith-youtube">

{!! $i->youtube_link !!}

</div>
</div>
</div>

@endsection

@endforeach
