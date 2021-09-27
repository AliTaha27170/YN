<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>إدارة موقع المكتب</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/admin/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/admin/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/admin/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/admin/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/admin/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/ui/trumbowyg.min.css">

    <script src="/libs/jquery/dist/jquery.min.js"></script>
</head>

<body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none" style="background: #fff">
            <img class="c-sidebar-brand-full" src="/img/logo.svg" height="46" alt="CoreUI Logo" />
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="/admin/assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-title">الوظائف الشاغرة</li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/manage/jobs">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg> كل الوظائف</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/manage/jobs/create">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg> إضافة وظيفة جديدة</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/manage/jobs/resumes">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg>طلبات التوظيف</a></li>

            <li class="c-sidebar-nav-title">الرسائل الواردة </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/manage/contactMessages">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg>رسائل التواصل الواردة</a></li>

                <li class="c-sidebar-nav-title">   إداراة النصوص , الخدمات والاسئلة   </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('homeEd') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg>تعديل مباشر</a></li>

        </ul>
    </div>
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>

            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" id="logout" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg>خروج</a></li>
                </li>
            </ul>
        </header>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @yield('content')
                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div>مؤسسة يحيى نجيب التجارية</div>
            </footer>
        </div>
    </div>
    <script src="/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="/admin/vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/trumbowyg.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.20.0/langs/ar.min.js"></script>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
<script>
    $('#logout').click(function (e) {
        e.preventDefault();
        $('#logout-form').submit();
    })
</script>
</html>
