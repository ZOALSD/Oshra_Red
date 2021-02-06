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

            {{ $i->title_en }}
        @endif
    @endsection

    @section('sub_p')
        @if (app('l') == 'ar')
            {{ $i->title_ar }}
        @else

            {{ $i->title_en }}
        @endif
    @endsection

    @section('breadcrumb')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @if (app('l') == 'en')
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('front.Home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('OurWork') }}">{{ __('front.Our_Work') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $i->title_ar }}</li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $i->title_en }}</li>
                    <li class="breadcrumb-item"><a href="{{ route('OurWork') }}">{{ __('front.Our_Work') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('front.Home') }}</a></li>
                @endif
            </ol>
        </nav>

    @endsection



    @section('content')
        <div class=" bg-img-light">
            <div class="container">
                <p class="text-white mw-650 f-22 b-red black">
                    @if (app('l') == 'ar')
                        {{ $i->disc_ar }}
                    @else
                        {{ $i->disc_en }}
                    @endif
                </p>

            </div>
        </div>
    @endsection

@endforeach
