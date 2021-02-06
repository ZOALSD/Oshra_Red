@extends('front.layouts.index')
@foreach ($works as $i)

    @section('bg_img')

        @if ($i->main_imig == '')
            {{ url('/asset/image/content-bg-dark.jpg') }}
        @else
            {{ it()->url($i->main_imig) }}
        @endif
    @endsection

    @section('p_color')
        {{ $i->p_color }}
    @endsection

    @section('main_p')
        @if (app('l') == 'ar')
            {{ $i->main_p_ar }}
        @else

            {{ $i->main_p_en }}
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
                @if (app('l') == 'en')

                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('front.Home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('front.Our_Work') }}</li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ __('front.Our_Work') }}</li>
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('front.Home') }}</a></li>
                @endif
            </ol>
        </nav>

    @endsection

@endforeach


@section('content')
    <div class="container">

        <div class="row">

            @foreach ($causes as $caues)
                <div class="mt-3 col-md-6">
                    <div class="card-group">
                        <div class="card">
                            @if ($caues->image == null)
                                <img class="card-img-top" src="asset/image/c3.jpg" alt="Card image cap">
                            @else
                                <img class="card-img-top" src="{{ it()->url($caues->image) }}" alt="Card image cap">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                    @if (app('l') == 'ar')
                                        {{ $caues->title_ar }}
                                    @else
                                        {{ $caues->title_en }}
                                    @endif
                                </h5>
                                <p class="card-text">
                                    <a href="{{ route('cause', $caues->id) }}" class=" black">

                                        @if (app('l') == 'ar')
                                            {{ $caues->disc_ar }}
                                        @else
                                            {{ $caues->disc_en }}
                                    </a>

            @endif
            </p>
            <p class="card-text"><small class="text-muted"><a href="{{ route('cause', $caues->id) }}" class=" black">Read
                        More</a></small></p>
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
