@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Towns</h4>
            <div class="">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Setup</li>
                    <li class="breadcrumb-item active">Towns</li>

                </ol>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Towns</h4>
                    <p>The table below shows a list of towns available for client objections</p>
                    <button type="button" class="btn btn-info btn-sm btn--icon-text ml-2" data-toggle="modal"
                        data-target="#addTown"><i class="zmdi zmdi-plus mr-2"></i>Add Town</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Town Id</th>
                                    <th>Town Name</th>
                                    <th>Created At</th>
                                    <th>Modified At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Towns as $Town)
                                    <tr>
                                        <td>{{ $Town->id }}</td>
                                        <td>{{ $Town->name }}</td>
                                        <td>{{ date('d M Y h:i A', strtotime($Town->created_at)) }}</td>
                                        <td>{{ date('d M Y h:i A', strtotime($Town->modified_at)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- objection modal -->
        <div class="modal fade" id="addTown" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">
                            <h2 class="mb-2">Add Town</h2>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('addTown') }}" enctype="application/x-www-form-urlencoded"
                            id="reset_password" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <strong>Town Name</strong> <strong class="text-danger">*</strong>
                                </label>
                                <input name="Addtown" type="text" class="form-control"
                                    placeholder="Enter name of town" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary block center btn-block mb-3 py-2 btn-control"
                                    value="Submit">
                            </div>
                        </form>
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
