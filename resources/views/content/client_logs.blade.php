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
                                    </tr>
                                </thead>
                                <tfoot class="thead-dark">
                                    <tr>
                                        <th class="text"><span class="text-white"></span></th>
                                        <th colspan="2"></th>
                                        <th colspan="2"></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($ClientLogs as $key => $ClientLog)

                                        <tr>
                                            <td class="w60">

                                                <a title="" href="user-profile.html">
                                                    <div class="avatar-char">
                                                        {{ $ClientLog->first_name[0] }}{{ $ClientLog->last_name[0] }}
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="the_user">
                                                <p class="mb-0"><a><strong>{{ $ClientLog->first_name }}
                                                            {{ $ClientLog->last_name }}</strong></a></p>
                                                <a href="tel:{{ $ClientLog->phone }}" title="">{{ $ClientLog->phone }}</a>
                                            </td>
                                            <td>
                                                @if ($ClientLog->online)
                                                <span class="listview__item chat__available">Online</span>
                                                @endif
                                                @if (!$ClientLog->online)
                                                <span class="listview__item chat__busy">Offline</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $ClientLog->email }}" title="Click to send email">{{ $ClientLog->email }}</a>
                                            </td>
                                            <td>
                                                <span>{{ date('d M Y h:i A', strtotime($ClientLog->last_login))}}</span>
                                            </td>
                                            <td class="d-none">Ms Mafuko</td>
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
