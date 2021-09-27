@extends('directEdit.layout.app')

@section('content')


<script>
    $("nav").addClass("scrolled");
    $(".n-services").addClass("n-active")
</script>

<link rel="stylesheet" href="/css/services.css">
<link rel="stylesheet" href="{{  asset('css/edit.css') }}">

<style>
    .editMod {
        display: block;
    }
</style>



<div class="ser-header" style="background-image: url('/img/services_bg3_rtl.jpg')">
    <div class="ser-header-box">
        <div class="row">
            <div class="col-md-5">
                <h1>خدماتنا المتنوعة</h1>

                <form action="{{ route('mainPush',['from'=>21 , 'to' =>30]) }}" method="POST">
                    {{ csrf_field() }}

                    {{-- id=21 to 30   max 35 => النص  --}}
                    <textarea  class="textarea ar text5  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
                    <textarea class="textarea en text5  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>

                    <div style="text-align: left;">
                        <button class="btn1 continue-btn">استمرار</button>
                    </div>
            </div>

            <div class="col-md-7">

            </div>
        </div>
    </div>

</div>
<br><br>
<h1 class="page-title">
    ماذا نقدم
    <p>الخدمات الرئيسية</p>
</h1>


<div class="services-parent">
    <div class="service-box">
        <img src="/img/icons/global.svg">


        {{-- id=1 => خدمات  --}}
        <textarea class="textarea ar text2  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text2  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>



        {{-- id=1 => الاستيراد والتصدير  --}}
        <textarea class="textarea ar text3  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text3  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>



        {{-- id=1 => النص  --}}
        <textarea class="textarea ar text4  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text4  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>

    </div>

    <div class="service-box">
        <img src="/img/icons/drug.svg">


        {{-- id=1 => لدينا  --}}
        <textarea class="textarea ar text2  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text2  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>



        {{-- id=1 => مستودع أدوية  --}}
        <textarea class="textarea ar text3  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text3  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>



        {{-- id=1 => النص  --}}
        <textarea class="textarea ar text4  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text4  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>

    </div>

    <div class="service-box">
        <img src="/img/icons/tech.svg">


        {{-- id=1 => خدمات  --}}
        <textarea class="textarea ar text2  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>


        {{-- id=1 => التصميم والبرمجة  --}}
        <textarea class="textarea ar text3  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text4  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>


        {{-- id=1 => النص  --}}
        <textarea class="textarea ar text  "  name="{{ $i }}">{{$text->find($i)-> ar}}</textarea>
        <textarea class="textarea en text  "  name="{{ $i.$i  }}" style="display:none"  >{{$text-> find($i++)-> en}}</textarea>

    </div>
</div>
<center>
    <button type="submit" id="save" class="btnSave btn1">حفظ التعديلات </button>
</center>
</form>

<br><br>
<!-- <h1 class="page-title">
    <p>جميع خدماتنا</p>
</h1> -->

@foreach ($services as $service)
        @if(is_null ($service->dad))
                <div class="service-cat-box">
                    <img src="{{ $service->logo }}">
                    <a href="{{route('deleteService',['id'=>$service->id])}}" onclick="return confirm('Are you sure you want to Delete {{$service->title_en}} and his {{ count($service->sons) }} Sons ?')">   حذف </a>
                    <a href="{{route('editService',['id'=>$service->id])}}" >تعديل</a>
                    <p>{{ $service->title_ar }}</p>
                </div>
                <div class="services-parent">

                @foreach ($service->sons as $son)
                    <div class="service-box2">
                        <div class="sb-header">
                            <img src="{{ $son->logo }}">
                            <div>
                                <h1>{{ $son->title_ar }}</h1>
                            </div>
                        </div>
                        <p>{{ $son->description_ar }}</p>
                        <a href="{{route('deleteService',['id'=>$son])}}" ><button  onclick="return confirm('Are you sure you want to Delete {{$son->title_en}} ?')" >حذف</button></a>
                        <a href="{{route('editService'  ,['id'=>$son])}}" > تعديل</a>
                        </div>

                @endforeach
                <h1 class="page-title" style="margin: 15px; text-align:right">  
                    <br><br><br>                    <hr>


                    أضف خدمة  جديدة 
                    <p style=" text-align:right">خاصة ب{{ $service->title_ar }}</p>
                </h1>

               <form method="POST" action="{{ route('serviceStore',['dad'=>$service->id]) }}" enctype="multipart/form-data"> 
                @csrf

                
                <div class="service-box2">
                    <div class="sb-header">
                    
                            {{-- id=1 => title  --}}
                            <textarea class="textarea ar text3  "  name="title_ar" required placeholder="العنوان"></textarea>
                    <textarea class="textarea en text3  "  name="title_en" style="display:none"  required placeholder="title">title</textarea>
                    </div>
                            {{-- id=1 => discription  --}}
                            <textarea class="textarea ar text4  "  name="description_ar" required placeholder="الوصف"></textarea>
                            <textarea class="textarea en text4  "  name="description_en" style="display:none" required placeholder="description"  >description</textarea>                   
                            <p>اللوغو الخاص بالخدمة  : </p>
                            <input type="file" name="logo_" required >
                            <button type="submit" id="save" class="btnSave btn1">حفظ  </button>
                        </div>
                </form>
            </div>
        @endif
@endforeach
<hr>
<h1>خدمة أساسية جديدة</h1>
<br>
<form method="POST" action="{{ route('serviceStoreDad')}}" enctype="multipart/form-data"> 
    @csrf

<div class="service-cat-box">
    <h4>اللوغو الخاص بالخدمة  : </h4>
    <input type="file" name="logo_" >
    <input type="text" name="title_ar" placeholder="العنوان الرئيسي للخدمة " class="ar" required>
    <input type="text" name="title_en" placeholder="Main Title " class="en" style="display:none" required>
    <button type="submit" id="save" class="btnSave btn1">حفظ  </button>
</div>
</form>
<br><br>
<br><br><hr><br><br>
<div class="service-cat-box">
    <img src="/img/icons/html.svg">
    <p>خدمات البرمجة</p>
</div>

<div class="services-parent">
    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/code.svg">
            <div>
                <h1>تطوير المواقع الالكترونية</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/server.svg">
            <div>
                <h1>ادارة المواقع الالكترونية</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/worldwide.svg">
            <div>
                <h1>حجز النطاق</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>
</div>

<div class="service-cat-box">
    <img src="/img/icons/creativity.svg">
    <p>خدمات التصميم</p>
</div>

<div class="services-parent">
    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/vector.svg">
            <div>
                <h1>تصميم أغلفة وطباعتها</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/coding.svg">
            <div>
                <h1>تصميم المواقع الالكترونية</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/printer.svg">
            <div>
                <h1>خدمات الطباعة</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>
</div>

<div class="service-cat-box">
    <img src="/img/icons/advertising.svg">
    <p>خدمات الدعاية والإعلان</p>
</div>

<div class="services-parent">
    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/megaphone.svg">
            <div>
                <h1>وكالات الاعلان</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/calendar.svg">
            <div>
                <h1>وضع خطة اعلان</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/bullhorn.svg">
            <div>
                <h1>التسويق عن طريق </h1>
                <h1>وسائل التواصل الاجتماعي</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>
</div>

<div class="service-cat-box">
    <img src="/img/icons/colleagues.svg">
    <p>الخدمات التجارية</p>
</div>

<div class="services-parent">
    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/shipped.svg">
            <div>
                <h1>خدمات الشحن</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/delivery.svg">
            <div>
                <h1>توزيع المواد الغذائية</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/box.svg">
            <div>
                <h1>خدمات التعبئة والتغليف</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

    <div class="service-box2">
        <div class="sb-header">
            <img src="/img/icons/qualitative.svg">
            <div>
                <h1>تقديم عينات</h1>
            </div>
        </div>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
            أن تولد مثل هذا النص أو العديد</p>
    </div>

</div>

<script>
    $(".continue-btn").click(function() {
        $('html, body').animate({
            scrollTop: $(".page-title").offset().top - 110
        }, 1500);
    });
</script>


@endsection