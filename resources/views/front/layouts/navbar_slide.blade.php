@php
$Our_Work_name = __('front.Our_Work');
$Our_Work_link = route('OurWork');
$Training_name = __('front.Training_Learing');
$Training_link = 'Learn_Tearing';
$Get_Involved_name = __('front.Get_Involved');
$Get_Involved_link = '#';
$About_us_var = __('front.About_us');
$About_us_link = route('about');
$Blog_var = __('front.Blog');
$Blog_link = route('BlogBage');
$Contact_us_var = __('front.Contact_us');
$Contact_us_link = '#contact_us';
$Done = route('Done');

if (app('l') == 'ar') {
    $lang_link = aurl('lang/en');
    $lang = 'English';
} else {
    $lang_link = aurl('lang/ar');
    $lang = 'عربي';
}

@endphp


<header style="background-image: url(@yield('bg_img')); min-height:500px">
    <!--navbar mobile start her ----------------------->

    <div class="main-links modile-nav">
        <table class="">
            <tr>
                <td class="logo" style="background-image: url(asset/image/logo.png)">
                    <a href="{{ url('/') }}">OSHRA </a>
                </td>
                <td class="m-link donate">
                    <a href="#">Donate</a>
                </td>
                <td class="m-link search-icon">
                    <a href="#" class="search">
                        <i class="fas fa-search"></i>
                    </a>
                </td>
                <td class="m-link">
                    <div class="container-icon" onclick="icon(this)" id="Toggle_menu">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="pt-3 bg-white dorp" id="Drop_Down">
            <ul class="dorp-m-15">
                <li><a href="{{ $Our_Work_link }}">{{ $Our_Work_name }}</a></li>
                <br />
                <li><a href="{{ $Training_link }}">{{ $Training_name }}</a></li>
                <br />
                <li>
                <li><a href="{{ $Get_Involved_name }}">{{ $Get_Involved_name }}</a></li>
            </ul>
            <ul class="bg-dedede sub-drop">
                <br />
                <li><a href="{{ $About_us_link }}">{{ $About_us_var }}</a></li>
                <hr />
                <li><a href="{{ $Blog_link }}">{{ $Blog_var }}</a></li>
                <hr />
                <li><a href="{{ $Contact_us_link }}">{{ $Contact_us_var }}</a></li>
                <hr />
                <li><a href="{{ $lang_link }}">{{ $lang }}</a></li>
                <hr />
            </ul>
            <div class="text-center col-12 Donate-top">
                <div class="text-center ">
                    {{ trans('front.Your_contribution') }}
                </div>
                <hr>
                <button class="btn btn-outline-danger">{{ trans('fornt.Done_now') }}</button>

            </div>
            <div class="mt-20 text-white col-md-6 social-media top-media">
                <br />
                <a href="#" class="facebook">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="#" class="instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="#" class="youtube">
                    <i class="fab fa-youtube fa-2x"></i>
                </a>
                <a href="#" class="whatsapp">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>

                <a href="#" class="telegram">
                    <i class="fab fa-telegram fa-2x"></i>
                </a>

                <a href="#" class="twitter">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>

            </div>


            <br>

        </div>
    </div>

    <!--navbar mobile end her ----------------------->
    <div class="container">
        <div class="top_nav">
            <span class="Done-top">
                <a href="{{ $Done }}">{{ trans('front.Please_Done') }}</a>
            </span>

            <ul class="float-right links-top">
                <li><a href="{{ $About_us_link }}">{{ $About_us_var }}</a></li>
                <li><a href="{{ $Blog_link }}">{{ $Blog_var }}</a></li>
                <li><a href="{{ $Contact_us_link }}">{{ $Contact_us_var }}</a></li>
                <li><a href="{{ $lang_link }}">{{ $lang }}</a></li>

                <li>
                    <a href="#" class="search">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="main-links" id="main-link-hide">
            <table class="">
                <tr>
                    <td class="logo" style="background-image: url(asset/image/logo.png)">
                        <a href="{{ url('/') }}">OSHRA </a>
                    </td>
                    <td class="m-link"><a href="{{ $Our_Work_link }}">{{ $Our_Work_name }}</a></td>
                    <td class="m-link">
                        <a href="{{ $Training_link }}">{{ $Training_name }}</a>
                    </td>
                    <td class="m-link">
                        <a href="{{ $Get_Involved_name }}">{{ $Get_Involved_name }}</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-6 col-md-12 show-in-phone">
                <p class="main-p" style="color:@yield('p_color')">
                    <span class=" s-hide">
                        <br>
                    </span>
                    @yield('main_p')
                </p>
                <p class="sub-p" style="color:@yield('p_color')">
                    @yield('sub_p')
                </p>

            </div>
        </div>

        <div>
            @yield('btn')

        </div>
        <br />
    </div>



</header>
@yield('breadcrumb')
