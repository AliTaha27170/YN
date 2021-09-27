@extends('directEdit.layout.app')

@section('content')

<script>
    $("nav").addClass("scrolled");
    $(".n-about").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/career.css">
<link rel="stylesheet" href="{{  asset('css/edit.css') }}">

<div style="background-image: url('/img/contact_bg.jpg')" class="career-header">
    <div class="career-header-box">
        <h1>{{ __('about.who_are_we') }} </h1>
    </div>

</div>

<div class="career-box about-box">
    <br>
    <img src="/img/logo.svg" class="about-logo">
    <br>
    <h3>{{ __('about.Yehia') }}</h3>


    <form action="{{ route('mainPush',['from'=>56 , 'to' =>56]) }}" method="POST">
        {{ csrf_field() }}


        {{-- id=56 to 56    max 70 => النص  --}}
        <textarea class="textarea text6   ar"  name="{{ $i }}">
   {{$text->find($i)->ar}} 
       </textarea>
        <textarea class="textarea text6   en"  name="{{ $i.$i  }}" style="display:none"  >
   {{$text->find($i++)->en}} 
       </textarea>


</div>
<center>
    <button type="submit" id="save" class="btnSave btn1">حفظ التعديلات </button>

</center>
</form>
<br><br>

@endsection