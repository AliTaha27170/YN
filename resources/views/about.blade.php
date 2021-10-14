@extends('layout.app')

@section('content')


<script>
    $("nav").addClass("scrolled");
    $(".n-about").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/career.css">

<div style="background-image: url('/img/contact_bg.jpg')" class="career-header">
    <div class="career-header-box">
        <h1>{!! __('about.who_are_we')!!} </h1>
    </div>

</div>

<div class="career-box about-box">
    <br>
    <img src="/img/logo.svg" class="about-logo">
    <br>
    <h3>{{ __('about.Yehia') }}</h3>
    <p class="about-text">{!! __('about.AboutText') !!}</p>
</div>

<br><br>

@endsection
