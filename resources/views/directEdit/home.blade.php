@extends('directEdit.layout.app')

@section('content')


<link rel="stylesheet" href="{{  asset('css/home.css') }}">
<link rel="stylesheet" href="{{  asset('css/edit.css') }}">

<style>
    .editMod {
        display: block;



    }

    .cl {
        background-color: #001a4b;
    }
</style>
<form action="{{ route('mainPush',['from'=>1 , 'to' =>14]) }}" method="POST">
    {{ csrf_field() }}
    <div class="home-slider">
        <div style="background-image: url('/img/slider1_rtl.jpg')" class="slider-item">
            <div class="filter"></div>
            <div class="slider-content">
                <p style="margin-bottom: 25px">@lang('home.welcome')</p>
                <h1>مؤسسة يحيى نجيب</h1>
                <h2>التجارية</h2>

                {{-- id=1 to 14 max 20=>  --}}
                <textarea required class="textarea text1   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
                <textarea class="textarea text1   en" name="a" required
                    style="display:none">{{$text->find($i++)-> en}}</textarea>

                <a href="about" class="btn1">من نحن</a>

            </div>
        </div>
    </div>

    <div class="services-parent">
        <div class="service-box">
            <img src="/img/icons/global.svg">
            {{-- id=1 => خدمات  --}}
            <textarea required class="textarea text2   ar text2" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text2   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>

            {{-- id=1 => الاستيرادوالتصدير   --}}
            <textarea required class="textarea text3   ar" name="{{ $i }}">{{$text->find($i)-> ar}} </textarea>
            <textarea required class="textarea text3   en" name="{{ $i.$i  }}"
                style="display:none">{{$text-> find($i++)-> en}}</textarea>
            {{-- id=1 => النص  --}}
            <textarea required class="textarea text4   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text4   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>
        </div>

        <div class="service-box">
            <img src="/img/icons/drug.svg">
            {{-- id=1 => لدينا  --}}
            <textarea required class="textarea text2   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text2   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>
            {{-- id=1 => مستودع أدوية  --}}
            <textarea required class="textarea text3   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text3   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>
            {{-- id=1 => النص  --}}
            <textarea required class="textarea text4   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text4   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>
        </div>

        <div class="service-box">
            <img src="/img/icons/tech.svg">
            {{-- id=1 => حدمة  --}}
            <textarea required class="textarea text2   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text2   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>

            {{-- id=1 => برمجة  --}}
            <textarea required class="textarea text3   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text3   en" name="{{ $i.$i  }}"
                style="display:none">{{$text-> find($i++)-> en}}</textarea>
            {{-- id=1 => النص  --}}
            <textarea required class="textarea text4   ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
            <textarea required class="textarea text4   en" name="{{ $i.$i  }}"
                style="display:none">{{$text->find($i++)-> en}}</textarea>
        </div>
    </div>
    <div style="text-align: center">
        <a href="services" class="btn1">عرض جميع خدماتنا</a>

    </div>
    <br><br>
    <div class="watch-parent">
        <h1 class="page-title">
            شاهد
            <p>الرابط الخاص بمقطع الفيديو  : </p><input name="video" style="width: 270px;" placeholder="video Url" value="{{ $video }}" ></div>
            <center>
                 <iframe  width="560" height="315" src="{{ $video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </h1>
        <br>
   

                <div class="col-lg-6">
                    <h2>خدمات مؤسستنا</h2>
                    {{-- id=1 => النص  --}}
                    <textarea required class="textarea text1   ar" name="{{ $i }}">{{$text->find($i)-> ar}} </textarea>
                    <textarea required class="textarea text1   en" name="{{ $i.$i  }}"
                        style="display:none">{{$text->find($i++)-> en}}</textarea>
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
                    <h1>تعرف على</h1>
                    <h1>مستودعنا للأدوية</h1>
                </div>
            </div>

            <div class="col-lg-6">
                <h2>مستودع أدوية مؤسسة يحيى نجيب</h2>
                {{-- id=1 => النص  --}}
                <textarea required class="textarea text1 text5  ar" name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
                <textarea required class="textarea text1 text5   en" name="{{ $i.$i  }}"
                    style="display:none">{{$text->find($i++)-> en}}</textarea>
            </div>
            <div style="text-align: right;">
                <a class="btn1" href="warehouse">تعرف أكثر</a>
            </div>
        </div>
    </div>
    </div>

    <div class="counting-parent">
        <ul>
            <li>
                <h1>تأسست</h1>
                <p>1936</p>
            </li>

            <li>
                <h1>شركاتنا</h1>
                <input type="number" required class="number" name="{{ $i }}" placeholder="{{ $text->find($i)-> ar }}"
                    value="{{ $text->find($i)->ar }}">
                <input type="number" required class="number" name="{{ $i.$i }}" value="{{ $i++ }}"
                    style="display: none">

            </li>


            <li>
                <h1>فروعنا</h1>
                <input type="number" required class="number" name="{{ $i }}" value="{{ $text->find($i)-> ar }}">
                <input type="number" required class="number" name="{{ $i.$i }}" value="{{ $i++ }}"
                    style="display: none">

            </li>

        </ul>
    </div>
    <center>
        <button type="submit" id="save" class="btnSave btn1">حفظ التعديلات </button>
    </center>

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
</form>

@endsection