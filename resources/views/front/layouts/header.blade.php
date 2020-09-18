<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
      
  <meta charset="UTF-8">
  <meta name="description" content="@yield('Discraption')">
  <meta name="keywords" content="@yield('keyword')">
  <meta name="author" content="John Doe">
  @if(!empty(setting()->icon))
  <link rel="shortcut icon" href="{{ it()->url(setting()->icon) }}" />
  @endif
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/load.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/main.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/navbar.css" />
    @if(app('l') == 'ar')
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/rtl.css" />
    @endif
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/FontAwesome/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/FontAwesome/brands.min.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/FontAwesome/solid.min.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/FontAwesome/brands.min.css" />
    <link rel="stylesheet" href="{{ url("/") }}/asset/css/animation.css" />
    @if(app('l') == 'en')
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap"
      rel="stylesheet"
    />
    @endif
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>OSHRA</title>
  </head>
  <body dir="">


    <!-- Preloader -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
              <div class="preloader-circle"></div>
              <div class="preloader-img pere-text">
                  <img src="{{ url('') }}/asset/image/load/logoo.png" alt="">
              </div>
          </div>
      </div>
  </div>