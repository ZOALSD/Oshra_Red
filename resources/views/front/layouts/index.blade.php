@include('front.layouts.header')
@include('front.layouts.navbar_slide')
@yield('content')

{{-- @include('front.layouts.contact') --}}
@livewire('contact-us')
@include('front.layouts.footer')
