@extends('layout.app')

@section('content')

<script>
    $("nav").addClass("scrolled");
    $(".n-career").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/career.css">
<link rel="stylesheet" href="/libs/accordion/css/aria.accordion.css">

<div class="career-header">
    <div class="career-header-box">
        <h1>{{ __('career.Join_our_team') }}</h1>
    </div>

</div>

<div class="career-box">
    <h1>{{ __('career.Be_one_of_us') }}</h1>
    @if (Session::has("isSuccess"))
        @if (Session::get("isSuccess"))
        <div class="succ-msg">
            {{ __('career.received_your_request') }}
                </div>
        @else
        <div class="error-msg">
            {{ __('career.all_fields') }}
        </div>
        @endif
    @endif

    <div class="send-cv-box">
        <div class="row">
            <div class="col-md-7">
                <form action="postJobRequest" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" class="input1" placeholder="    {{ __('career.fullName') }} ">
                    <br><br>
                    <input type="text" name="email" class="input1" placeholder="   {{ __('career.email') }} ">
                    <br><br>
                    <input type="text" name="phone" class="input1" placeholder="  {{ __('career.phone') }}">
                    <br><br>
                    <input type="text" name="job" class="input1" placeholder="{{ __('career.jop') }}">
                    <br><br>
                    <textarea type="text" name="about" class="input1" placeholder=" {{ __('career.about_yourself') }} "></textarea>
                    <br><br>
                    <div class="input1">
                        {{ __('career.cv') }} &nbsp;&nbsp;<input name="resume" class="input1" type="file">
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <button class="btn1" href="#"> {{ __('career.send') }} </button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 career-creative-box">
                <img src="/img/logo.svg" alt="">
            </div>
        </div>
    </div>
    
    <br>
    <hr style="opacity: 0.3">
    <div class="jobs-box">
        <div class="jobs-parent">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">{{ __('career.jobs') }}</h2>
                    @if (count($jobs) > 0)
                        
                    <div data-aria-accordion data-transition id="accGen">

                        @foreach ($jobs as $job)
                            <h3 data-aria-accordion-heading>
                                {{$job->title}}
                            </h3>
                            <div data-aria-accordion-panel>
                                <p>
                                <span class="job-location"><img src="/img/icons/marker.svg" width="20">&nbsp;{{$job->location}}</span>
                                    {!! $job->description !!}
                                </p>
                            </div>
                        @endforeach

                    </div>
                    
                    @else
                        <div style="text-align: center">
                            <img height="80" src="/admin/assets/img/box.svg" alt="">
                            <h3>{{ __('career.noJops') }} </h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <br>
    </div>
</div>
<script>
    $(".go-jobs").click(function() {
        $('html, body').animate({
            scrollTop: $(".jobs-box").offset().top - 110
        }, 1500);
    });
</script>
<br><br>
<script src="/libs/accordion/js/aria.accordion.min.js"></script>

@endsection
