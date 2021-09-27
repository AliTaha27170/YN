@extends('layout.app')

@section('content')


<link rel="stylesheet" href="/css/home.css">

<div class="home-slider">
    <div style="background-image: url('/img/slider1_rtl.jpg')" class="slider-item">
        <div class="filter"></div>
        <div class="slider-content">
            <p style="margin-bottom: 25px">@lang('home.welcome')</p>
            <h1> @lang('home.yehia') </h1>
            <h2>{{ __('home.Commercial') }}</h2>
            <h3>{{ $text->find(1)->$local }}</h3>
            <a href="about" class="btn1">{{ __('home.who_are_we') }}</a>

        </div>
    </div>
</div>
<div class="services-parent">
    <div class="service-box">
        <img src="/img/icons/global.svg">
        <h2>{{ $text->find(2)->$local }}</h2>
        <h1>{{ $text->find(3)->$local }} </h1>
        <p> {{ $text->find(4)->$local }}</p>
    </div>

    <div class="service-box">
        <img src="/img/icons/drug.svg">
        <h2>{{ $text->find(5)->$local }}</h2>
        <h1>{{ $text->find(6)->$local }}</h1>
        <p>{{  $text->find(7)->$local }}</p>

    </div>

    <div class="service-box">
        <img src="/img/icons/tech.svg">
        <h2>{{ $text->find(8)->$local }}</h2>
        <h1>{{ $text->find(9)->$local }}</h1>
        <p>{{  $text->find(10)->$local }}</p>
    </div>
</div>
<div style="text-align: center">
    <a href="services" class="btn1">{{ __('home.View_services') }}</a>
</div>
<br><br>

<br>
<div class="watch-parent">
    <h1 class="page-title">
        {{ __('home.look') }}
        <p>{{ __('home.know_more') }}</p>
    </h1>
    <br>
    <div class="watch-box">
        <div class="row">
            <div class="col-lg-" style="max-width: 100% ;">
                <div class="video-bo">
                    <iframe width="580px"  height="380px" style="margin: 26px"
                        src="{{ $video }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="warehouse-parent">
    <div class="row">
        <div class="col-lg-6">
            <div class="side-title">
                <img src="/img/capsules.svg" class="capsules-img">
                <h1> {{ __('home.Get_know') }}</h1>
            </div>
        </div>

        <div class="col-lg-6">
            <h2>{{ __('home.Yehia_drug') }}</h2>
            <p>{{ $text->find(12)->$local }}</p>
            <div style="text-align: right;">
                <a class="btn1" href="warehouse">{{ __('home.know') }}</a>
            </div>
        </div>
    </div>
</div>

<div class="counting-parent">
    <ul>
        <li>
            <h1>{{ __('home.established') }}</h1>
            <p>1936</p>
        </li>


        <li>
            <h1>{{ __('home.Branches') }}</h1>
            <p>{{ $text->find(13)->ar }}</p>
        </li>


        <li>
            <h1>{{ __('home.Our_companies') }}</h1>
            <p>{{ $text->find(14)->ar }}</p>
        </li>
    </ul>
</div>

<script>
    $(".home-slider").slick();

</script>

<script>
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $("nav").addClass("scrolled")
        } else {
            $("nav").removeClass("scrolled")
        }
    });

    $(".n-home").addClass("n-active")

</script>

@endsection