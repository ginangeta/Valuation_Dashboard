<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NCCG - Online Valuation Roll Dashboard</title>
    <link rel='icon' href='demo/img/icon_3.png' type='image/x-icon' />


    <!-- icon files -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icon_fonts/css/icon_set_1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon_fonts/css/icon_set_2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon_fonts/css/icon_set_3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon_fonts/css/icon_set_4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon-font/flaticon.css') }}">

    <!-- Vendor styles -->
    <link rel="stylesheet"
        href="{{ asset('vendors/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('vendors/MaterialDesign-Webfont-master/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}">


    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}" />

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top-navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">

</head>

<body data-ma-theme="green">
    <main class="main main--alt">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>


        <section>
            <div class="login-content fluid-container">
                <div class="login-content-overlay op-1"></div>
                <div class="d-flex flex-column login-form-container">
                    <form id="login-form" action="{{ route('authenticate') }}" method="POST"
                        class="login-form bg-white w-100">
                        @csrf
                        @if (Session::has('success'))
                            <p class="alert alert-success">
                                {{ Session::get('success') }}</p>
                        @endif
                        @if (Session::has('errors'))
                            <p class="alert alert-danger">{{ Session::get('errors') }}
                            </p>
                        @endif
                        <div class="login-form-header p-1">
                            <a class="" href="#">
                                <img class="the-login-logo nccg-logo"
                                    src="{{ asset('demo/img/logo-files/nairobi-county2.png') }}">
                                <img class="the-login-logo nms-logo" src="{{ asset('demo/img/logo-files/nms.png')}}">
                            </a>
                            <h2 class="mb-2">Dashboard Login</h2>
                            <small>Fill in the information below to get access to the</small>
                            <p class="mb-0 text-b font-weight-light text-capitalize font-12px">NCCG Draft Valuation Roll
                            </p>
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>Email</strong> <strong class="text-danger">*</strong>
                            </label>
                            <div class="input-email-login">
                                <input name="email" type="email" class="form-control"
                                    placeholder="Enter your email address" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>
                                <strong>Password</strong> <strong class="text-danger">*</strong>
                            </label>
                            <div class="input-pass-login">
                                <input name="password" type="password" class="form-control"
                                    placeholder="Enter your password" required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary block center btn-block mb-3 py-2 btn-control">Login
                            <i class="ti-arrow-right ml-2"></i></button>

                        <div>
                            <a href="{{ route('forgot-password') }}">Forgot password</a>
                        </div>
                    </form>

                    <p class="text-center mt-4"> Powered by <strong><a href="https://nouveta.tech/" target="new">Nouveta
                                LTD</a></strong></p>

                </div>
            </div>
        </section>

    </main>

    <!-- Older IE warning message -->
    <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

    <!-- Javascript -->
    <!-- ../'vendors -->
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendors/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendors/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('vendors/salvattore/salvattore.min.js') }}"></script>
    <script src="{{ asset('vendors/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/fullcalendar/fullcalendar.min.js') }}"></script>


    <!-- Charts and maps-->
    <script src="{{ asset('demo/js/flot-charts/curved-line.js') }}"></script>
    <script src="{{ asset('demo/js/flot-charts/dynamic.js') }}"></script>
    <script src="{{ asset('demo/js/flot-charts/line.js') }}"></script>
    <script src="{{ asset('demo/js/flot-charts/chart-tooltips.js') }}"></script>
    <script src="{{ asset('demo/js/other-charts.js') }}"></script>
    <script src="{{ asset('demo/js/jqvmap.js') }}"></script>


    <!-- Highchart Scripts Vendors -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>

    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/heatmap.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/offline-exporting.js"></script>

    <script src="{{ asset('vendors/highcharts/accesibility.js') }}"></script>
    <script src="{{ asset('vendors/highcharts/item-series.js') }}"></script>
    <script src="{{ asset('vendors/highcharts/streamgraph.js') }}"></script>
    <script src="{{ asset('vendors/highcharts/series-label.js') }}"></script>
    <script src="{{ asset('vendors/highcharts/annotations.js') }}"></script>
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>

    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js')}}"></script> -->


    <!-- Highchart Scripts js -->
    <script src="{{ asset('js/highcharts/theme1.js') }}"></script>
    <script src="{{ asset('js/highcharts/bullet.js') }}"></script>



    <!-- high chart data -->
    <script src="{{ asset('js/chart-data/all-objections.js') }}"></script>
    <script src="{{ asset('js/chart-data/loan-breakdown.js') }}"></script>

    <!-- App functions and actions -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>

</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

</html>
