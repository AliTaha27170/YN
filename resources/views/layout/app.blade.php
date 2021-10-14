<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>YN</title>
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/libs/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/libs/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="/libs/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/libs/sider/css/sidebar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="/css/rtl.css">
    <link rel="stylesheet" href="/css/mobile.css">
    @if(LaravelLocalization::getCurrentLocale()=='en')
    <link rel="stylesheet" href="/css/en.css">
    @endif

    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/libs/slick-carousel/slick/slick.min.js"></script>
    <script src="/libs/jquery.cookie.js"></script>
    <script src="/libs/sider/js/sidebar.js"></script>

    <script>
        $.cookie("lang", "ar", {
            path: "/"
        });

    </script>
    <style>
        .language:lang({{ LaravelLocalization::getCurrentLocale() }}) {
            background: #e6e6e6ad;
          }

        </style>
</head>

<body class="is-loading">


    <div class="loading-parent">
        <img class="logo" src="/img/logo.svg">
        <img class="loading" src="/img/loading.gif">
    </div>

    <nav>

        <div class="top-nav">
            <div class="links-parent">
                <a href="about">{{ __('home.about_US') }}</a>
                <a href="contact">{{ __('home.Connect_us') }}</a>
            </div>

            <div class="info-parent">
                <a href="#">
                    <p>Yehia@hopkinsvita.com</p>
                    <img src="/img/icons/at.svg">
                </a>
                <a href="#">
                    <p class="ltr">+963 967 204 344</p>
                    <img src="/img/icons/call.svg">
                </a>
            </div>
        </div>

        <div class="bottom-nav">
            <button id="open-left" class="nav-toggle"><img src="/img/icons/menu.svg" alt=""></button>
            <a href="/">
                <img class="logo" src="/img/logo.svg" alt="">
            </a>

            <ul class="links-parent">
                <li class="editMod"><a href="#save" style="color:#ff4949c6;font-weight:700">أنت الأن في وضع التعديل !!
                    </a><a href="about"  id='lang'> en </a></li>
                <li class="n-home"><a href="/">{{ __('home.Main') }}</a></li>
                <li class="n-services"><a href="services">{{ __('home.our_services') }}</a></li>
                <li class="n-phar"><a href="warehouse"> {{ __('home.Drug_store') }}</a></li>
                <li class="n-career"><a href="career"> {{ __('home.jobs') }}</a></li>
                <li class="n-contact n-hid"><a href="contact"> {{ __('home.Connect_us') }}</a></li>
                <li class="n-about n-hid"><a href="about"> {{ __('home.about_US') }}</a></li>

                <ul>
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}"
             href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
             class="language"
             lang="{{ $localeCode }}"
             >
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
</ul>
                {{-- <li class="n-lang"><a href="/en/"><img src="/img/icons/usa.svg"></a></li> --}}
            </ul>
        </div>

    </nav>


    <aside class="sidebar" id="sidebar">
        <div class="close">
            <a href="#" style="text-align: right;" id="sidebar-close">&times;</a>
        </div>
        <div class="content">
            <a class="sidebar-brand" href="/">
                <img src="/img/logo.svg" width="70" alt="">
            </a>
            <hr>
            <ul class="s-menu">
                <li class="n-home"><a href="/">{{ __('home.Main') }}</a></li>
                <li class="n-services"><a href="services">{{ __('home.our_services') }}</a></li>
                <li class="n-phar"><a href="warehouse">{{ __('home.Drug_store') }}</a></li>
                <li class="n-career"><a href="career"> {{ __('home.jobs') }}</a></li>
                <li class="n-contact n-hid"><a href="contact">{{ __('home.Connect_us') }}</a></li>
                <li class="n-about n-hid"><a href="about">{{ __('home.about_US') }}</a></li>
                {{-- <li>
                    <a href="/en/">
                        <img src="/img/icons/usa.svg" alt="">
                        English
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>


    @yield('content')


    <footer>
        <div class="row">
            <div class="col-md-3">
                <img src="/img/logo.svg" alt="" class="logo">
            </div>
            <div class="col-md-4">
                <h2> {{ __('home.Site_Map') }}</h2>
                <ul>
                    <li>
                        <a href="/"><span> {{ __('home.Main') }}</span> </a>
                    </li>

                    <li>
                        <a href="services"><span>{{ __('home.our_services') }}</span></a>
                    </li>
                    <li>
                        <a href="warehouse"><span>{{ __('home.Drug_store') }}</span> </a>
                    </li>
                    <li>
                        <a href="career"><span> {{ __('home.jobs') }}</span></a>
                    </li>
                    <li>
                        <a href="contact"><span>{{ __('home.Connect_us') }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <h2>{{ __('home.Contact_info') }}</h2>
                <ul>
                    <li>
                        <a href="#">
                            <img src="/img/icons/callFoot.svg" alt="">
                            <span class="ltr" style="display: inline-block">+963 967 204 344 - +963 41 257 5466</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/img/icons/atFoot.svg" alt="">
                            <span>Yehia@hopkinsvita.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/img/icons/marker.svg" alt="">
                            <span>{{ __('home.Adress') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/img/icons/clock.svg" alt="">
                            <span>{{ __('home.here') }}</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>

        <div class="copy">
            &copy; {{ __('home.rights_reserved') }} - {{ date('Y') }}
        </div>

    </footer>

        <!-- Scroll To TOp Button -->
        <button id="scroll_top"><i class="fas fa-arrow-up"></i></button>
        <!-- Scroll To TOp Button -->
    <script>
        $(document).ready(function () {
            $(".loading-parent").fadeOut(800);
            $("body").removeClass("is-loading");
        })

    </script>
    <script src="js/aos.js"></script>
    <script src="{{ asset('js/scrolltotop.js') }}"></script>
</body>

</html>
