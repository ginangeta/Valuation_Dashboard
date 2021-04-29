<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    <a href="index.html"><img class="img-fluid" src="https://test.nairobicitycounty.ke/"></a>
                </h1>
            </div>

            <form class="search">
                @csrf
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Search through the dashboard">
                    <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="dropdown top-nav__notifications d-none">
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
                <a href="https://test.nairobicitycounty.ke"
                    class="btn btn-warning text-black btn--icon-text btn-sm ml-3"><i
                        class="mdi mdi-arrange-send-backward"></i>Public Portal</a>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="rad-50">
                        <div class="avatar-char mr-2 listview__img m-0" alt="profile picture">
                            {{ Session::get('user')->name[0] }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                        <div class="listview listview--hover acc-options">

                            <a href="#" class="listview__item">
                                <div class="avatar-char mr-2">{{ Session::get('user')->name[0] }}</div>

                                <div class="listview__content">
                                    <div class="listview__heading">
                                        {{ Session::get('user')->name }}
                                    </div>
                                    <p>{{ Session::get('user')->username }}</p>
                                </div>
                            </a>
                            <hr>
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">
                                        <a href="{{ route('user-password-reset') }}"><i
                                                class="ti-unlock"></i><span>Change Password</span></a>
                                    </div>
                                </div>

                            </div>
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">
                                        <a href="{{ route('logout') }}"><i
                                                class="ti-power-off"></i><span>Logout</span></a>
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
                <h1 style="margin-left: 30px;">
                    <a class="text-white">Nairobi City County</a>
                    <p class="text-white">NCCG Online Valuation Roll Dashboard</p>
                </h1>
            </div>
            <div class="scrollbar-inner">
                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        {{-- <img class="user__img" src="{{asset('demo/img/profile-pics/8.jpg')}}" alt=""> --}}
                        <div class="avatar-char mr-2">{{ Session::get('user')->name[0] }}</div>
                        <div>
                            <div class="user__name">{{ Session::get('user')->name }}</div>
                            <div class="user__email">{{ Session::get('user')->username }}</div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item d-none" href="#">View Profile</a>
                        <a class="dropdown-item d-none" href="#">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="navigation__active"><a href="{{ route('dashboard') }}"><i
                                class="flaticon-bar-chart"></i>Dashboard</a>
                    </li>


                    <li class="navigation__active"><a href="{{ route('getAllObjections') }}"><i
                                class="mdi mdi-clipboard-edit-outline"></i>Objections</a></li>
                    <li class="navigation__active"><a href="{{ route('getAllPayments') }}"><i
                                class="mdi mdi-cash"></i>Payments</a></li>

                    <li class="navigation__sub">
                        <a href="{{ route('AddProperty') }}"><i
                                class="mdi mdi-clipboard-text-multiple-outline"></i>Valuation Roll<i
                                class="zmdi zmdi-caret-down drop-down-icon"></i></a>
                        <ul class="">
                            <li><a href="{{ route('AddProperty') }}"><i
                                        class="mdi mdi-clipboard-plus-outline mx-2"></i>Add
                                    Property</a></li>
                            <li><a href="{{ route('getAllProperties') }}"><i
                                        class="mdi mdi-clipboard-text-outline mx-2"></i>Listed
                                    Properties</a>
                            </li>
                        </ul>
                    </li>

                    <li class="navigation__active d-none"><a href="{{ route('systemUsage') }}"><i
                                class="mdi mdi-chart-arc"></i>System Usage</a></li>

                    <li class="navigation__sub">
                        <a href="#"><i class="mdi mdi mdi-chart-arc"></i>Site Activity <i
                                class="zmdi zmdi-caret-down drop-down-icon pt-0"></i></a>
                        <ul>
                            <li><a href="{{ route('getSearchedProperties') }}"><i
                                        class="mdi mdi-history mr-2"></i>Search History</a>
                            </li>
                            <li><a href="{{ route('getClientLogs') }}"><i
                                        class="mdi mdi-account-reactivate mr-2"></i>Client Logs</a></li>
                            <li><a href="{{ route('getAllTowns') }}"><i
                                        class="mdi mdi-city-variant-outline mr-2"></i>Towns</a></li>
                        </ul>
                    </li>

                    <li class="navigation__sub">
                        <a href="#"><i class="mdi mdi-account-multiple"></i>User Accounts <i
                                class="zmdi zmdi-caret-down drop-down-icon pt-0"></i></a>
                        <ul>
                            <li><a href="{{ route('newUser') }}"><i class="mdi mdi-account-plus mr-2"></i>New
                                    user</a>
                            </li>
                            <li><a href="{{ route('getactiveUsers') }}"><i
                                        class="zmdi zmdi-check-all mr-2"></i>Active
                                    users</a></li>
                            <li><a href="{{ route('blockedUsers') }}"><i class="zmdi zmdi-block mr-2"></i>Inactive
                                    users</a></li>
                            <li class="d-none"><a href="{{ route('userManage') }}"><i
                                        class="zmdi zmdi-settings mr-2"></i>User
                                    Management</a></li>
                        </ul>
                    </li>


                    <li class="navigation__active mt-1"><a href="{{ route('logout') }}"><i
                                class="zmdi zmdi-power"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </aside>

        @yield('content');


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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Vendors: Data tables -->
    <script src="{{ asset('vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables-buttons/buttons.html5.min.js') }}"></script>

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
    {{-- <script src="{{ asset('js/chart-data/all-objections.js') }}"></script> --}}
    <script src="{{ asset('js/chart-data/loan-breakdown.js') }}"></script>

    <!-- App functions and actions -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>

    @yield('scripts')

</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

</html>
