<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GIS Mass Valuation</title>
    <link rel='icon' href="{{asset('demo/img/icon_3.png')}}" type='image/x-icon' />


    <!-- icon files -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_1.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_2.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_3.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon_fonts/css/icon_set_4.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon-font/flaticon.css')}}">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{asset('vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/MaterialDesign-Webfont-master/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}">


    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" href="{{asset('vendors/slick/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendors/slick/slick-theme.css')}}"/>

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/top-navigation.css')}}">
    <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">

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

        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                <div class="navigation-trigger__inner">
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                    <i class="navigation-trigger__line"></i>
                </div>
            </div>

            <div class="header__logo hidden-sm-down">
                <h1>
                    <a href="index.html"><img class="img-fluid" src="demo/img/logo-files/nairobi-county2.png"></a>
                </h1>
            </div>

            <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search through the dashboard">
                    <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="dropdown top-nav__notifications">
                    <a href="#" data-toggle="dropdown" class="top-nav__notify">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="pl-2">Notifications</span><strong class="ml-2 text-danger">3</strong>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover">
                            <div class="listview__header">
                                Unread Notifications

                                <div class="actions">
                                    <a href="#" class="actions__item zmdi zmdi-check-all"
                                        data-ma-action="notifications-clear"></a>
                                </div>
                            </div>


                            <div class="listview__scroll scrollbar-inner">
                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">David Belle</div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Jonathan Morris</div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Fredric Mitchell Jr.</div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at
                                            augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Glenn Jecobs</div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui
                                            est consectetur neque</p>
                                    </div>
                                </a>
                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">Glenn Jecobs</div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui
                                            est consectetur neque</p>
                                    </div>
                                </a>


                            </div>

                            <div class="listview__header">
                                <a class="btn btn-info btn--icon-text btn-block text-white">View all <i
                                        class="zmdi zmdi-arrow-right"></i> </a>
                            </div>


                            <div class="p-1"></div>
                        </div>
                    </div>
                </li>
                <a href="#" class="btn btn-warning text-black btn--icon-text btn-sm ml-3"><i
                        class="mdi mdi-arrange-send-backward"></i>Public Portal</a>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="rad-50"><img src="demo/img/profile-pics/1.jpg"
                            class="listview__img m-0" style="height: 32px;" alt="profile picture"></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover acc-options">

                            <a href="#" class="listview__item">
                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="profile picture">

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        John Doe
                                    </div>
                                    <p>johndoe@email.com</p>
                                </div>
                            </a>
                            <hr>
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">
                                        <a><i class="ti-unlock"></i><span>Change Password</span></a>
                                    </div>
                                </div>

                            </div>
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">
                                        <a><i class="ti-power-off"></i><span>Logout</span></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </li>

            </ul>

        </header>

        <aside class="sidebar px-0 pt-0">
            <div class="header__logo sidebar_logo">
                <a href="index.html">
                    <img class="img-fluid" src="demo/img/logo-files/nairobi-county2.png">
                </a>
                <h1 class="mb-1">
                    <a class="text-white">Nairobi City Council</a>
                    <p class="text-white">GIS Valuation Dashboard</p>
                </h1>
            </div>
            <div class="scrollbar-inner">
                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                        <div>
                            <div class="user__name">Malinda Hollaway</div>
                            <div class="user__email">malinda-h@gmail.com</div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">View Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="navigation__active"><a href="index.html"><i class="flaticon-bar-chart"></i>Dashboard</a>
                    </li>


                    <li class="navigation__active"><a href="objections.html"><i
                                class="mdi mdi-clipboard-edit-outline"></i>Objections</a></li>
                    <li class="navigation__active"><a href="payments.html"><i class="mdi mdi-cash"></i>Payments</a></li>

                    <li class="navigation__sub">
                        <a href="#"><i class="mdi mdi-clipboard-text-multiple-outline"></i>Valuation Roll<i
                                class="zmdi zmdi-caret-down drop-down-icon"></i></a>
                        <ul class="">
                            <li><a href="new-property.html"><i class="mdi mdi-clipboard-plus-outline mx-2"></i>Add
                                    Property</a></li>
                            <li><a href="valuation-roll.html"><i class="mdi mdi-clipboard-text-outline mx-2"></i>Listed
                                    Properties</a>
                            </li>
                        </ul>
                    </li>

                    <li class="navigation__active"><a href="system_usage.html"><i class="mdi mdi-chart-arc"></i>System
                            Usage</a></li>


                    <li class="navigation__active mt-1"><a href="landing.html"><i class="zmdi zmdi-power"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </aside>

        @yield('content')

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
    <!-- ../vendors -->
    <script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('vendors/salvattore/salvattore.min.js')}}"></script>
    <script src="{{asset('vendors/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('vendors/moment/moment.min.js')}}"></script>
    <script src="{{asset('vendors/daterangepicker/daterangepicker.min.js')}}"></script>
    <script src="{{asset('vendors/fullcalendar/fullcalendar.min.js')}}"></script>


    <!-- Charts and maps-->
    <script src="{{asset('demo/js/flot-charts/curved-line.js')}}"></script>
    <script src="{{asset('demo/js/flot-charts/dynamic.js')}}"></script>
    <script src="{{asset('demo/js/flot-charts/line.js')}}"></script>
    <script src="{{asset('demo/js/flot-charts/chart-tooltips.js')}}"></script>
    <script src="{{asset('demo/js/other-charts.js')}}"></script>
    <script src="{{asset('demo/js/jqvmap.js')}}"></script>


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

    <script src="{{asset('vendors/highcharts/accesibility.js')}}"></script>
    <script src="{{asset('vendors/highcharts/item-series.js')}}"></script>
    <script src="{{asset('vendors/highcharts/streamgraph.js')}}"></script>
    <script src="{{asset('vendors/highcharts/series-label.js')}}"></script>
    <script src="{{asset('vendors/highcharts/annotations.js')}}"></script>
    <script src="{{asset('vendors/slick/slick.min.js')}}"></script>

    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->


    <!-- Highchart Scripts js -->
    <script src="{{asset('js/highcharts/theme1.js')}}"></script>
    <script src="{{asset('js/highcharts/bullet.js')}}"></script>

    <!-- high chart data -->
    <script src="{{asset('js/chart-data/all-objections.js')}}"></script>
    <script src="{{asset('js/chart-data/loan-breakdown.js')}}"></script>
 
    <!-- App functions and actions -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>

    @yield('scripts')

</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

</html>