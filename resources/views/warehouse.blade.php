@extends('layout.app')

@section('content')


<script>
    $("nav").addClass("scrolled");
    $(".n-phar").addClass("n-active")
</script>
<link rel="stylesheet" href="/libs/accordion/css/aria.accordion.css">
<link rel="stylesheet" href="/css/warehouse.css">

<div class="wh-header" style="background-image: url('/img/med-bg1_rtl.jpg')">
    <div class="row">
        <div class="col-lg-7">
            <div class="side-title">
                <img src="/img/capsules.svg" class="capsules-img">
                <div>
                    <h1>{{ __("drug.Drug_store") }}</h1>
                    <h1>{{ __("drug.yehia") }}</h1>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="circles-parent">
                <div>
                    <div class="circle-item">
                        <img src="/img/icons/shield.svg">
                        <p>{{ __("drug.safe") }}</p>
                    </div>
                </div>

                <div>
                    <div class="circle-item">
                        <img src="/img/icons/tick.svg">
                        <p>{{ __("drug.Quality") }}</p>
                    </div>

                    <div class="circle-item">
                        <img src="/img/icons/global2.svg">
                        <p>{{ __("drug.Global") }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="wwr-parent">
    <h1 class="page-title">
        {{ __("drug.About_drug") }}
    </h1>
    <br>
    <div class="wwr-box">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box"></div>
            </div>

            <div class="col-md-6">
                <h2>    {{ __("drug.yehia_Drug") }}</h2>
                <p>{{ $text->find(36)->$local }}</p>
            </div>
        </div>
    </div>
</div>


<div class="st-parent">
    <h1 class="page-title">
        {{ __("drug.we_store") }}
    </h1>
    <br>
    <div class="st-box">
        <div class="row">
            <div class="col-md-6">
                <h2>{{ __("drug.we_stok") }}</h2>
                <p>{{ $text->find(37)->$local }}</p>
            </div>
            <div class="col-md-6">
                <img src="/img/graph.svg" class="img-box" />
            </div>

        </div>
    </div>
</div>

<div class="faq-parent">
    <div class="row">
        <div class="col-md-8">
            <h2 class="title">{{ __("drug.Question_Answer") }}</h2>
            <div data-aria-accordion data-transition id="accGen">

                <h3 data-aria-accordion-heading>
                    السؤال هنا ؟
                </h3>
                <div data-aria-accordion-panel>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                    </p>
                </div>

                <h3 data-aria-accordion-heading>
                    السؤال هنا ؟
                </h3>
                <div data-aria-accordion-panel>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                    </p>
                </div>

                <h3 data-aria-accordion-heading>
                    السؤال هنا ؟
                </h3>
                <div data-aria-accordion-panel>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                    </p>
                </div>

                <h3 data-aria-accordion-heading>
                    السؤال هنا ؟
                </h3>
                <div data-aria-accordion-panel>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد
                    </p>
                </div>


            </div>
        </div>

        <div class="col-md-4">
            <form class="msg-box">
                <h2>{{ __("drug.looking_for") }} </h2>
                <h3>{{ __("drug.Ask_us") }}</h3>

                <input placeholder=" {{ __('drug.full_name') }} " type="text" class="input1">
                <input placeholder=" {{ __('drug.email') }}" type="text" class="input1">
                <textarea placeholder="  {{ __('drug.write') }}" class="input1"></textarea>
                <div style="text-align: center">
                    <button>{{ __("drug.send") }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/libs/accordion/js/aria.accordion.min.js"></script>

@endsection
