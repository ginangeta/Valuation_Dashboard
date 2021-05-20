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
                                <div class="clearfix">
                                    <form action="{{ route('createUser') }}" id="add_user_form" method="POST" class="row">
                                        <div class="col-12">
                                            @csrf
                                            @if (Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                            @endif
                                            @if (Session::has('errors'))
                                                <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                                            @endif
                                        </div>

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
                                                <input type="text" name="first_name" required class="form-control"
                                                    placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label><strong>Other Name(s) <strong
                                                            class="text-danger">*</strong></strong></label>
                                                <input type="text" class="form-control" name="last_name" required
                                                    placeholder="Enter other name(s)">
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label><strong>Nat ID NO./ PPT No.<strong
                                                            class="text-danger"></strong></strong></label>
                                                <input type="text" name="identification_no" required class="form-control"
                                                    placeholder="Enter user's phone number">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label><strong>Phone Number <strong
                                                            class="text-danger">*</strong></strong></label>
                                                <input type="text" name="phone" required class="form-control"
                                                    placeholder="Enter user's phone number">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label><strong>Email address <strong
                                                            class="text-danger">*</strong></strong></label>
                                                <input type="email" name="email" required class="form-control"
                                                    placeholder="Enter email address">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-2">
                                            <p class="font-weight-bold">User privilages and permissions</p>
                                        </div>

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <div class="checkbox">
                                                        <input type="radio" value="user" name="roles[]" id="customCheck7"
                                                            checked>
                                                        <label class="checkbox__label" for="customCheck7">User</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <div class="checkbox">
                                                        <input type="radio" value="superAdmin" id="customCheck1">
                                                        <label class="checkbox__label" for="customCheck1">Super
                                                            Admin</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <div class="checkbox">
                                                        <input type="radio" value="admin" id="customCheck2">
                                                        <label class="checkbox__label" for="customCheck2">Admin</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 mt-5">
                                            <button type="submit" class="btn btn-primary btn-add-user">Add User</button>
                                        </div>

                                    </form>

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
    <script type="text/javascript">
        $('.checkbox input').on('click', function() {
            if ($(this).is(':checked')) {
                $(this).attr("name", "roles[]");
                $(this).parent().parent().siblings().find('input').removeAttr('name');
            }
        });

    </script>

    <script type="text/javascript">
        window.onload = function() {
            var form = document.getElementById('add_user_form');
            $('.btn-add-user').on('click', function() {
                for (var i = 0; i < form.elements.length; i++) {
                    if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                        // alert('There are some required fields!');
                        $(this).css("border", "1px solid red");
                        return false;
                    }
                }
                form.submit();
            });
        };

    </script>
@endsection
