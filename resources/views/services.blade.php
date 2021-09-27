@extends('layout.app')

@section('content')


<script>
    $("nav").addClass("scrolled");
    $(".n-services").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/services.css">

<div class="ser-header" style="background-image: url('/img/services_bg3_rtl.jpg')">
    <div class="ser-header-box">
        <div class="row">
            <div class="col-md-5">
                <h1>{{ __('services.various_services') }}</h1>
                <p> {{ $text->find(21)->$local }}</p>
                <div style="text-align: left;">
                    <button class="btn1 continue-btn">{{ __('services.continue') }}</button>
                </div>
            </div>

            <div class="col-md-7">

            </div>
        </div>
    </div>

</div>
<br><br>
<h1 class="page-title">
    {{ __('services.we_offer') }}
        <p>     {{ __('services.Main_services') }}        </p>
</h1>


<div class="services-parent">
    <div class="service-box">
        <img src="/img/icons/global.svg">
        <h2>{{ $text->find(22)->$local }}</h2>
        <h1>{{ $text->find(23)->$local }}</h1>
        <p>{{  $text->find(24)->$local }}</p>
    </div>

    <div class="service-box">
        <img src="/img/icons/drug.svg">
        <h2>{{ $text->find(25)->$local }}</h2>
        <h1>{{ $text->find(26)->$local }}</h1>
        <p>{{  $text->find(27)->$local }}</p>
    </div>

    <div class="service-box">
        <img src="/img/icons/tech.svg">
        <h2>{{ $text->find(28)->$local }}</h2>
        <h1>{{ $text->find(29)->$local }}</h1>
        <p>{{  $text->find(30)->$local }}</p>
    </div>
</div>

<br><br>
<!-- <h1 class="page-title">
    <p>جميع خدماتنا</p>
</h1> -->
@foreach ($services as $service)
        @if(is_null ($service->dad))
                <div class="service-cat-box">
                    <img src="{{ $service->logo }}">
                    <p>{{ $service->$title }}</p>
                </div>
                <div class="services-parent">

                @foreach ($service->sons as $son)
                    <div class="service-box2">
                        <div class="sb-header">
                            <img src="{{ $son->logo }}">
                            <div>
                                <h1>{{ $son->$title }}</h1>
                            </div>
                        </div>
                        <p>{{ $son->$description }}</p>
                        </div>

                @endforeach


                </h1>

               
            </div>
        @endif
@endforeach

<script>
    $(".continue-btn").click(function() {
        $('html, body').animate({
            scrollTop: $(".page-title").offset().top - 110
        }, 1500);
    });
</script>

@endsection
