@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <span class="rev-title-container">
                        <h1 class="text-capitalize stream_name m-0">New User</h1>
                    </span>
                    <div class="">
                        <ol class="breadcrumb border-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">User Accounts</li>
                            <li class="breadcrumb-item active">New User</li>

                        </ol>

                    </div>
                </div>
            </div>
        </header>


        <div class="row with-custom-header">
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 d-flex align-items-stretch" style="margin-bottom: 2.2rem;">
                <div class="account-info h-100">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">User registration Guidelines</h4>
                            <h6 class="card-subtitle">Fill in the form, the fields with a <strong
                                    class="text-danger">*</strong> are mandatory fields</h6>
                            <hr>
                            <div class="form-img">
                                <img class="img" src="demo/img/form-svgs/users.svg">
                            </div>

                            <div class="notes">
                                <p>
                                    Once all the required fields have been entered and form submited, an account password
                                    will be sent to the user from where he,she will use to login and start using the system.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12">
                <div class=create-form>
                    <div class="col-12 p-0">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">System User registration form</h4>
                                <h6 class="card-subtitle">Fill in The form below correctly so as to create a user's account
                                </h6>
                                <hr>
                                <div class="row clearfix">

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>Man Number <strong
                                                        class="text-danger">*</strong></strong></label>
                                            <input type="text" class="form-control" placeholder="Enter man number">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>First name <strong
                                                        class="text-danger">*</strong></strong></label>
                                            <input type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>Other Name(s) <strong
                                                        class="text-danger">*</strong></strong></label>
                                            <input type="text" class="form-control" placeholder="Enter other name(s)">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>Nat ID NO./ PPT No.<strong
                                                        class="text-danger"></strong></strong></label>
                                            <input type="text" class="form-control" placeholder="Enter user's phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>Phone Number <strong
                                                        class="text-danger">*</strong></strong></label>
                                            <input type="text" class="form-control" placeholder="Enter user's phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label><strong>Email address <strong
                                                        class="text-danger">*</strong></strong></label>
                                            <input type="email" class="form-control" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <p><label><strong>Select gender<strong
                                                            class="text-danger">*</strong></label></strong></p>
                                            <div class="radio radio--inline">
                                                <input type="radio" name="customRadio" id="male">
                                                <label class="radio__label" for="male">Male</label>
                                            </div>
                                            <div class="radio radio--inline">
                                                <input type="radio" name="customRadio" id="female">
                                                <label class="radio__label" for="female">Female</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <p class="font-weight-bold">User privilages and permissions</p>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck1">
                                            <label class="checkbox__label" for="customCheck1">Payment Movements</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck2">
                                            <label class="checkbox__label" for="customCheck2">Editting</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck3">
                                            <label class="checkbox__label" for="customCheck3">Receipting</label>
                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck4">
                                            <label class="checkbox__label" for="customCheck4">Approvals</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck5">
                                            <label class="checkbox__label" for="customCheck5">Reporting</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="customCheck6">
                                            <label class="checkbox__label" for="customCheck6">System Admin</label>
                                        </div>

                                    </div>

                                    <div class="col-12 mt-5">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit_user_details">Add User</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
