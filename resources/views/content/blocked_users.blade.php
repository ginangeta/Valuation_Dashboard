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