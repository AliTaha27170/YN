@extends('layout.app')

@section('content')


<script>
    $("nav").addClass("scrolled");
    $(".n-contact").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/career.css">

<div style="background-image: url('/img/contact_bg.jpg')" class="career-header">
    <div class="career-header-box">
        <h1> {{ __('contact.Connect_with_us') }}</h1>
    </div>

</div>

<div class="career-box">
    <h1>  {{ __('contact.private_message') }} </h1>
    @if (Session::has("isSuccess"))
        @if (Session::get("isSuccess"))
        <div class="succ-msg">
            {{ __('contact.received_your_message') }}    
             </div>
        @else
        <div class="error-msg">
            {{ __('contact.all_fields') }}    
        </div>
        @endif
    @endif
    <div class="send-cv-box">
        <div class="row">
            <div class="col-md-7">
                <form action="{{route('postContact')}}" method="POST">
                    @csrf
                    <input name="name" type="text" class="input1" placeholder=" {{ __('contact.full_name') }}  ">
                    <br><br>
                    <input name="email" type="text" class="input1" placeholder=" {{ __('contact.email') }} ">
                    <br><br>
                    <input name="subject" type="text" class="input1" placeholder="{{ __('contact.subject') }} ">
                    <br><br>
                    <textarea name="message" type="text" class="input1" placeholder="{{ __('contact.message') }}  "></textarea>
                    <br><br>
                    <div style="text-align: center;">
                        <button class="btn1">{{ __('contact.send') }} </button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 career-creative-box">
                <h3>{{ __('contact.infCon') }} </h3>

                <ul class="contact-info-box">
                    <li>
                        <img src="/img/icons/callFoot.svg" alt="">
                        <span class="ltr" style="display: inline-block">+963 967 204 344</span>
                    </li>
                    <li>
                        <img src="/img/icons/callFoot.svg" alt="">
                        <span class="ltr" style="display: inline-block">+963 41 257 5466</span>
                    </li>
                    <li>
                        <img src="/img/icons/atFoot.svg" alt="">
                        <span>Yehia@hopkinsvita.com</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>

<br><br>

@endsection
