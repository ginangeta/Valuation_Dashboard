@extends('layouts.frame')
@section('content')
<section class="content">
    <header class="content__title px-0 border-0">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <span class="rev-title-container">
                    <h1 class="text-capitalize stream_name m-0">Inactive Users</h1>
                </span>
                <div class="">
                    <ol class="breadcrumb border-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">User Accounts</li>
                        <li class="breadcrumb-item active">Inactive Users</li>

                    </ol>

                </div>
            </div>
        </div>
    </header>


    <div class="row with-custom-header">
        <div class="col-12 p-0">
            <div class="card animated fade-in">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>User's name</th>
                                    <th>Date created</th>
                                    <th>Date blocked</th>
                                    <th>Reason for being blocked</th>
                                    <th>Blocked by</th>
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
                                    <td class="the_user">
                                        <p class="mb-0"><a href="user-profile.html"><strong>Scott
                                                    Ortega</strong></a></p>
                                        <a href="tel:070235689" title="">070235689</a>
                                    </td>
                                    <td>
                                        <span>22 May 2020 10:02</span>
                                    </td>
                                    <td><span>25 Jul 2019 12:56</span></td>
                                    <td>Some really funny reason</td>
                                    <td>Ms Mafuko</td>
                                    <td>
                                        <button class="btn btn-success btn--icon-text ml-2 deactivate-user"
                                            title="deactvate this account" data-toggle="modal"
                                            data-target="#deactivate-user"><i class="zmdi zmdi-check-all"></i>
                                            Reactivate Account</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td class="the_user">
                                        <p class="mb-0"><a href="user-profile.html"><strong>Scott
                                                    Ortega</strong></a></p>
                                        <a href="tel:070235689" title="">070235689</a>
                                    </td>
                                    <td>
                                        <span>22 May 2020 10:02</span>
                                    </td>
                                    <td><span>25 Jul 2019 12:56</span></td>
                                    <td>Some really funny reason</td>
                                    <td>Ms Mafuko</td>
                                    <td>
                                        <button class="btn btn-success btn--icon-text ml-2 deactivate-user"
                                            title="deactvate this account" data-toggle="modal"
                                            data-target="#deactivate-user"><i class="zmdi zmdi-check-all"></i>
                                            Reactivate Account</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td class="the_user">
                                        <p class="mb-0"><a href="user-profile.html"><strong>Scott
                                                    Ortega</strong></a></p>
                                        <a href="tel:070235689" title="">070235689</a>
                                    </td>
                                    <td>
                                        <span>22 May 2020 10:02</span>
                                    </td>
                                    <td><span>25 Jul 2019 12:56</span></td>
                                    <td>Some really funny reason</td>
                                    <td>Ms Mafuko</td>
                                    <td>
                                        <button class="btn btn-success btn--icon-text ml-2 deactivate-user"
                                            title="deactvate this account" data-toggle="modal"
                                            data-target="#deactivate-user"><i class="zmdi zmdi-check-all"></i>
                                            Reactivate Account</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td class="the_user">
                                        <p class="mb-0"><a href="user-profile.html"><strong>Scott
                                                    Ortega</strong></a></p>
                                        <a href="tel:070235689" title="">070235689</a>
                                    </td>
                                    <td>
                                        <span>22 May 2020 10:02</span>
                                    </td>
                                    <td><span>25 Jul 2019 12:56</span></td>
                                    <td>Some really funny reason</td>
                                    <td>Ms Mafuko</td>
                                    <td>
                                        <button class="btn btn-success btn--icon-text ml-2 deactivate-user"
                                            title="deactvate this account" data-toggle="modal"
                                            data-target="#deactivate-user"><i class="zmdi zmdi-check-all"></i>
                                            Reactivate Account</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w60">

                                        <a title="" href="user-profile.html">
                                            <div class="avatar-char">SO</div>
                                        </a>
                                    </td>
                                    <td class="the_user">
                                        <p class="mb-0"><a href="user-profile.html"><strong>Scott
                                                    Ortega</strong></a></p>
                                        <a href="tel:070235689" title="">070235689</a>
                                    </td>
                                    <td>
                                        <span>22 May 2020 10:02</span>
                                    </td>
                                    <td><span>25 Jul 2019 12:56</span></td>
                                    <td>Some really funny reason</td>
                                    <td>Ms Mafuko</td>
                                    <td>
                                        <button class="btn btn-success btn--icon-text ml-2 deactivate-user"
                                            title="deactvate this account" data-toggle="modal"
                                            data-target="#deactivate-user"><i class="zmdi zmdi-check-all"></i>
                                            Reactivate Account</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
@endsection