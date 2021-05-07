@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <span class="rev-title-container">
                        <h1 class="text-capitalize stream_name m-0">Active Users</h1>
                    </span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">User Accounts</li>
                            <li class="breadcrumb-item active">Active Users</li>

                        </ol>

                    </div>
                </div>
            </div>
        </header>

        <div class="row with-custom-header">
            <div class="col-12 p-0">
                <div class="card animated fade-in">
                    <div class="card-body">
                        <div class="col-12">
                            @csrf
                            @if (Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif
                            @if (Session::has('errors'))
                                <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th></th>
                                        <th>User's name</th>
                                        <th>Current Status</th>
                                        <th>Email</th>
                                        <th>Last seen</th>
                                        <th class="d-none">Created by</th>
                                        <th class="text-right">Actions</th>

                                    </tr>
                                </thead>
                                <tfoot class="thead-dark">
                                    <tr>
                                        <th class="text"><span class="text-white"></span></th>
                                        <th colspan="2"></th>
                                        <th colspan="2"></th>
                                        <th colspan="2"></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($activeUsers as $key => $activeUser)

                                        <tr>
                                            <td class="w60">

                                                <a title="" href="user-profile.html">
                                                    <div class="avatar-char">
                                                        {{ $activeUser->first_name[0] }}{{ $activeUser->last_name[0] }}
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="the_user">
                                                <p class="mb-0"><a><strong>{{ $activeUser->first_name }}
                                                            {{ $activeUser->last_name }}</strong></a></p>
                                                <a href="tel:{{ $activeUser->phone }}"
                                                    title="">{{ $activeUser->phone }}</a>
                                            </td>
                                            <td>
                                                @if ($activeUser->online)
                                                    <span class="listview__item chat__available">Online</span>
                                                @endif
                                                @if (!$activeUser->online)
                                                    <span class="listview__item chat__busy">Offline</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $activeUser->email }}"
                                                    title="Click to send email">{{ $activeUser->email }}</a>
                                            </td>
                                            <td>
                                                <span>{{ date('d M Y h:i A', strtotime($activeUser->last_login)) }}</span>
                                            </td>
                                            <td class="d-none">Ms Mafuko</td>
                                            <td class="text-right">
                                                <button class="btn btn-info btn--icon-text ml-2 deactivate-user"
                                                    title="Edit details" data-toggle="modal"
                                                    data-target="#editUser{{ $key }}"><i
                                                        class="zmdi zmdi-edit ml-2"></i> Edit User
                                                </button>
                                                <button class="btn btn-danger btn--icon-text ml-2 deactivate-user"
                                                    title="deactvate this account" data-toggle="modal"
                                                    data-target="#deactivateUser{{ $key }}"><i
                                                        class="zmdi zmdi-block"></i> Block
                                                    Account</button>
                                            </td>
                                            {{-- Edit Modal --}}
                                            <div class="modal fade" id="editUser{{ $key }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="login-form-header p-1">
                                                                            <h2 class="mb-2">Edit User Form</h2>
                                                                            <small>Fill in the information below to edit
                                                                                user information</small>
                                                                            <button type="button" class="close modal-close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close"><span
                                                                                    aria-hidden="true"><i
                                                                                        class="lnr lnr-cross"></i></span></button>

                                                                        </div>
                                                                    </div>


                                                                    <div class="col-12">
                                                                        <form action="{{ route('editUser') }}"
                                                                            method="POST"
                                                                            class="bg-white w-100 filter v3 listing-filter">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="form-group d-none">
                                                                                    <label>
                                                                                        <strong>User ID</strong>
                                                                                        <strong
                                                                                            class="text-danger">*</strong>
                                                                                    </label>
                                                                                    <div class="">
                                                                                        <input name="user_id" type="name"
                                                                                            class="form-control"
                                                                                            value="{{ $activeUser->id }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label>
                                                                                            <strong>First
                                                                                                Name</strong>
                                                                                            <strong
                                                                                                class="text-danger">*</strong>
                                                                                        </label>
                                                                                        <div class="">
                                                                                            <input name="first_name"
                                                                                                type="name"
                                                                                                class="form-control"
                                                                                                value="{{ $activeUser->first_name }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label>
                                                                                            <strong>Last
                                                                                                Name</strong>
                                                                                            <strong
                                                                                                class="text-danger">*</strong>
                                                                                        </label>
                                                                                        <div class="">
                                                                                            <input name="last_name"
                                                                                                type="name"
                                                                                                class="form-control"
                                                                                                value="{{ $activeUser->last_name }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>
                                                                                    <strong>Email</strong>
                                                                                    <strong class="text-danger">*</strong>
                                                                                </label>
                                                                                <div class="">
                                                                                    <input name="email" type="email"
                                                                                        class="form-control"
                                                                                        value="{{ $activeUser->email }}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label>
                                                                                    <strong>Mobile
                                                                                        Number</strong>
                                                                                    <strong class="text-danger">*</strong>
                                                                                </label>
                                                                                <div class="">
                                                                                    <input name="phone" type="number"
                                                                                        class="form-control"
                                                                                        value="{{ $activeUser->phone }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>
                                                                                    <strong>Idenitification
                                                                                        Number</strong>
                                                                                    <strong class="text-danger">*</strong>
                                                                                </label>
                                                                                <div class="">
                                                                                    <input name="identification_no"
                                                                                        type="number" class="form-control"
                                                                                        value="{{ $activeUser->identification_no }}">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-12 d-flex justify-content-end mt-30">
                                                                                <div class="form-group mr-2">
                                                                                    <input type="submit"
                                                                                        class="btn btn-primary block center btn-block mb-3 py-2 btn-control"
                                                                                        value="Edit User">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="submit"
                                                                                        data-dismiss="modal" tabindex="5"
                                                                                        class="btn btn-danger block center btn-block mb-3 py-2 btn-control"
                                                                                        value="Cancel">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Modal --}}
                                            {{-- Delete Modal --}}
                                            <div class="modal fade" id="deactivateUser{{ $key }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="login-form-header p-1 d-flex flex-row justify-content-between">
                                                                            <h2 class="mb-2">Deactivate User</h2>
                                                                            <button type="button" class="close modal-close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close"><span
                                                                                    aria-hidden="true"><i
                                                                                        class="mdi mdi-close"></i></span></button>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <form action="{{ route('deactivateUser') }}"
                                                                            enctype="application/x-www-form-urlencoded"
                                                                            id="reset_password" method="POST">
                                                                            @csrf

                                                                            <div class="form-group">
                                                                                <input name="userId"
                                                                                    class="form-control d-none"
                                                                                    value="{{ $activeUser->id }}"
                                                                                    required>
                                                                            </div>

                                                                            <div class="d-flex justify-content-center">
                                                                                <img src="{{asset('images/delete.jpg')}}" style="height: 230px !important">
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <input type="submit"
                                                                                    class="btn btn-primary block center btn-block mb-3 py-2 btn-control"
                                                                                    value="Deactivate User">
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Modal --}}
                                        </tr>
                                    @endforeach
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
