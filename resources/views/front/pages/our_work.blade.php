@extends('front.layouts.index')
@foreach ($works as $i)

@section('bg_img')
    {{ it()->url($i->main_imig) }}
@endsection

@section('p_color')
    {{ $i->p_color }}
@endsection

@section('main_p')
    @if (app('l') == 'ar')
         {{ $i->main_p_ar }}
    @else
        
        {{ $i->main_p_en}}    
@endif
    @endsection

@section('sub_p')
    @if (app('l') == 'ar')
    {{ $i->sub_p_ar }}
    @else
    {{ $i->sub_p_en }}
    @endif
@endsection

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Our Work</li>
    </ol>
  </nav>

@endsection

@endforeach


@section('content')
<div class="container">
  
    <div class="row">
      
@foreach($causes as $caues)
 <div class=" col-md-6 mt-3">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="asset/image/c3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">
        @if (app('l') == 'ar')
            {{ $caues->title_ar }}
          @else
          {{ $caues->title_en }}
        @endif
      </h5>
      <p class="card-text">
        <a href="{{ route('cause',$caues->id) }}" class=" black">

        @if (app('l') == 'ar')
        {{ $caues->disc_ar }}
      @else
      {{ $caues->disc_en }}
    </a>

    @endif
      </p>
      <p class="card-text"><small class="text-muted"><a href="{{ route('cause',$caues->id) }}" class=" black">Read More</a></small></p>
    </div>
  </div>
</div>
</div>
  @endforeach
</div>
</div>

  <!---End section Blog her -->
<div class="paginate-s3d">
  {{ $causes->links() }}

</div>
  @endsection
