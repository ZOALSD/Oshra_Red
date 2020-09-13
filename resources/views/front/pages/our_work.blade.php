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
    @php echo $i->main_p_ar; @endphp
    @else
    @php echo $i->main_p_en; @endphp
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