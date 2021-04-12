@extends('layouts.frame')
@section('content')
<section class="content">
    <header class="content__title px-0 border-0">
        <h4 class="p-0 mb-0 cl">Dashboard</h4>
        <div class="">
            <ol class="breadcrumb border-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Dashboard</li>

            </ol>
        </div>
    </header>

    <div class="row clearfix top-cards">
        <div class="col-12">
            <h3>Important statistics</h3>
        </div>
        <div class="col-sm-12 col-lg-3 col-md-6">
            <a class="card light-card calc-34">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-warning text-white rounded-circle">
                            <span class="mdi mdi-map-marker-radius-outline"></span>
                        </div>
                        <div class="ml-4">
                            <span class="font-12">Properties<strong
                                    class="today-full d-none"></strong></span>
                            <h4 class="mt-1 mb-0 font-weight-bold">{{ number_format($DashboardData->property_count) }}</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-3 col-md-6">
            <a class="card light-card calc-34">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-warning text-white rounded-circle">
                            <span class="mdi mdi-account-cancel-outline"></span>
                        </div>
                        <div class="ml-4">
                            <span class="font-12">Objections</span>
                            <h4 class="mt-1 mb-0 font-weight-bold">{{ number_format($DashboardData->objections_count) }}</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-lg-3 col-md-6">
            <a class="card calc-34">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-in-bg text-white rounded-circle bg-info text-uppercase">
                            <span class="mdi mdi-cash-check"></span>
                        </div>
                        <div class="ml-4">
                            <span class="font-12">Payments</span>
                            <h4 class="mt-1 mb-0 font-weight-bold">{{ number_format($DashboardData->payment_count) }}</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a class="card">
                <div class="card-body" style="background-color: #346f45;">
                    <div class="d-flex align-items-center">
                        <div class="w-100">
                            <p class="text-right mb-0">
                                <span class="font-12 text-white-50">Total Collection <strong
                                        class="week-full d-none"></strong></span>
                            </p>
                            <p class="text-right invoice-header">
                                <span class="mt-1 mb-0 font-weight-bold text-white">KES {{ number_format($DashboardData->total_collection) }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <!-- Orders -->
            <div class="card">
                <div class="card-header new-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h4 class="card-header-title">
                                Valuation Roll
                            </h4>
                        </div>

                        <div class="col-auto">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                            </ul>
                        </div>
                    </div>
                    <!-- / .row -->
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <div id="all-objections" class="highChartStyles animated fade-in-up" style="height: 100%; ">
                        </div>
                    </div>
                    <!-- <div class="chart">
                        <canvas id="transaction-data" class="chart-canvas"></canvas>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    <footer class="footer hidden-xs-down d-none">
        <p>Powered by</p>
        <center>
            <a class="nouveta-logoo" href="https://nouveta.tech/">
                <img src="demo/img/logo-files/nouveta_logo.png" target="new">
            </a>
        </center>
    </footer>
</section>
@endsection
@section('scripts')
@endsection