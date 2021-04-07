@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">System Usage</h4>
            <div class="">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">System Usage</li>

                </ol>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>System Logs</h4>
                    <p>The table below shows a list of NCCG Draft Valuation System Logs</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>User</th>
                                    <th>Log Type</th>
                                    <th>Details</th>
                                    <th>Date & Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>Added New User</span>
                                    </td>
                                    <td>Created <strong>Gina Wambui</strong> (<strong>role of reports</strong>)
                                    </td>
                                    <td><span>25 Jul 2019 12:56 PM</span></td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#transaction-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>Added Property</span>
                                    </td>
                                    <td>Created <strong>LR No :</strong> (<strong>57/1159</strong>)
                                    </td>
                                    <td><span>25 Jul 2019 12:56 PM</span></td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#transaction-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>Viewed Report</span>
                                    </td>
                                    <td>Viewed <strong>List of valuation propertied in Valuation Roll</strong>
                                    </td>
                                    <td><span>25 Jul 2019 12:56 PM</span></td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#transaction-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>Added New User</span>
                                    </td>
                                    <td>Created <strong>Gina Wambui</strong> (<strong>role of reports</strong>)
                                    </td>
                                    <td><span>25 Jul 2019 12:56 PM</span></td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#transaction-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>Added New User</span>
                                    </td>
                                    <td>Created <strong>Gina Wambui</strong> (<strong>role of reports</strong>)
                                    </td>
                                    <td><span>25 Jul 2019 12:56 PM</span></td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#transaction-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer hidden-xs-down">
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
