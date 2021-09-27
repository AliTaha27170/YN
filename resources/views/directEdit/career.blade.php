@extends('directEdit.layout.app')

@section('content')

<script>
    $("nav").addClass("scrolled");
    $(".n-career").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/career.css">
<link rel="stylesheet" href="/libs/accordion/css/aria.accordion.css">
<link rel="stylesheet" href="{{  asset('css/home.css') }}">
<link rel="stylesheet" href="{{  asset('css/edit.css') }}">

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
                <h3> {{ __('career.creative') }}  </h3>

 <form action="{{ route('mainPush',['from'=>47 , 'to' =>47]) }}" method="POST">
     {{ csrf_field() }}
   {{-- id=47 to 47    max 50 => النص  --}}
   <textarea class="textarea text   ar"  name="{{ $i }}">
    {{$text->find($i)-> ar}} 
        </textarea>
<textarea class="textarea text   en"  name="{{ $i.$i  }}" style="display:none"  >
    {{$text-> find($i++)-> en}} 
        </textarea>    
        
        <button class="go-jobs"> {{ __('career.continue') }}</button>
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
                    @if (1==0)
                        
                    
                    
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
<center>
    <button type="submit" id="save" class="btnSave btn1">حفظ التعديلات </button>
</center>
</form>

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
