@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Listed Properties</h4>
            <div class="">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Valuation Roll</li>
                    <li class="breadcrumb-item active">Listed Properties</li>

                </ol>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Valuation Roll Properties</h4>
                    <p>The table below shows a list of NCCG Draft Valuation Roll as of March 2021</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Serial No.</th>
                                    <th>LR No.</th>
                                    <th>Situation</th>
                                    <th>Owner</th>
                                    <th>Address</th>
                                    <th>Approx. Area(Ha)</th>
                                    <th>USV</th>
                                    <th>Land Use</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>{{ $property->id }}</td>
                                        <td>{{ $property->serial_no }}</td>
                                        <td>{{ $property->lr_no }}</td>
                                        <td>
                                            <p class="mb-0">{{ $property->situation }}</p>
                                            <p class="mb-0 d-none">
                                                <small>Kasarani Road</small>
                                            </p>
                                        </td>
                                        <td>{{ $property->owner }}</td>
                                        <td>
                                            <p class="mb-0">{{ $property->po_box }}-{{ $property->postal_code }}</p>
                                            <p class="mb-0 d-none">
                                                <small>Nairobi,KENYA</small>
                                            </p>
                                        </td>
                                        <td>{{ $property->approx_area }}</td>
                                        <td>KES {{ number_format($property->usv) }}</td>
                                        <td>{{ $property->land_use }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm btn--icon-text ml-2"
                                                data-toggle="modal" data-target="#property-details{{ $property->id }}"><i
                                                    class="zmdi zmdi-eye"></i>Details</button>
                                            <button type="button" class="btn btn-warning btn-sm btn--icon-text ml-2 d-none"
                                                data-toggle="modal" data-target="#edit-car-booking"><i
                                                    class="zmdi zmdi-edit"></i>Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm btn--icon-text ml-2 d-none"
                                                title="delete this property" data-toggle="modal"
                                                data-target="#deactivate-property"><i
                                                    class="zmdi zmdi-block"></i>Delete</button>
                                        </td>
                                    </tr>

                                    <!-- Modals -->
                                    <div class="modal fade" id="property-details{{ $property->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">LR
                                                        No: {{ $property->lr_no }} property
                                                        details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6><strong>Serial No.</strong></h6>
                                                    <p>{{ $property->serial_no }}</p>
                                                    <hr>

                                                    <h6><strong>Location/Situation</strong></h6>
                                                    <p class="mb-0">{{ $property->situation }}</p>
                                                    <hr>

                                                    <h6><strong>Owner</strong></h6>
                                                    <p>{{ $property->owner }}</p>
                                                    <hr>

                                                    <h6><strong>P.O.Box Address</strong></h6>
                                                    <p class="mb-0">{{ $property->po_box }}-{{ $property->postal_code }}</p>
                                                    <p class="mb-0 d-none">Nairobi,KENYA</p>
                                                    <hr>

                                                    <h6><strong>Approximate Area in Hectares</strong></h6>
                                                    <p>{{ $property->approx_area }}</p>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h6><strong>Date Registered</strong></h6>
                                                            <p>{{ date('d-m-Y', strtotime($property->created)) }}</p>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <h6><strong>Land Use</strong></h6>
                                                    <p>{{ $property->land_use }}</p>
                                                    <hr>

                                                    <h6><strong>Objection Status</strong></h6>
                                                    <span class="label label-pill label-primary">{{ $property->is_objected }}</span>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h6 class="text-left"><strong>Unimproved Site
                                                                    Value(USV)</strong></h6>
                                                            <h3 class="text-left">KES {{ number_format($property->usv) }} </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success btn-secondary"
                                                        data-dismiss="modal">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modals -->

                                @endforeach
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
