@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
{{--
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))--}}

@section('message')
<h3>

The site is under development. <br>
 Will be opening soon <br>
</h3>
 via <a href="http://facebook.com/ZOOLS3D">ZOOLS3D</a>


@endsection