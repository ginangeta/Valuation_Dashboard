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
                                        <th>#</th>
                                        <th>LR No.</th>
                                        <th>Number of Searches</th>
                                        <th>Searched By</th>
                                        <th>Property Owner</th>
                                        <th>Situation</th>
                                        <th>USV</th>
                                        <th>Objected Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($SearchedProperties as $key => $SearchedProperty)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $SearchedProperty->lr_no }}</td>
                                            <td>{{ $SearchedProperty->search_count }}</td>
                                            <td>
                                                <p class="mb-0">{{ $SearchedProperty->searched_by }}</p>
                                                <p class="mb-0">
                                                    <a
                                                        href="mailto:{{ $SearchedProperty->searcher_email }}"><small>{{ $SearchedProperty->searcher_email }}</small></a>
                                                </p>
                                            </td>
                                            <td>{{ $SearchedProperty->owner }}</td>
                                            <td>
                                                <p class="mb-0">{{ $SearchedProperty->situation }}</p>
                                            </td>
                                            <td>KES {{ number_format($SearchedProperty->usv) }}</td>
                                            <td>
                                                @if (!$SearchedProperty->is_objected)
                                                    <span class="badge badge-pill badge-success">Not Objected</span>
                                                @endif
                                                @if ($SearchedProperty->is_objected)
                                                    <span class="badge badge-pill badge-danger">Objected</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn--icon-text ml-2"
                                                    data-toggle="modal"
                                                    data-target="#SearchedProperty-details{{ $SearchedProperty->id }}"><i
                                                        class="zmdi zmdi-eye"></i>Details</button>
                                                <button type="button"
                                                    class="btn btn-danger btn-sm btn--icon-text ml-2 d-none"
                                                    title="delete this property" data-toggle="modal"
                                                    data-target="#deactivate-property"><i
                                                        class="zmdi zmdi-block"></i>Delete</button>
                                            </td>
                                        </tr>

                                        <!-- Modals -->
                                        <div class="modal fade" id="SearchedProperty-details{{ $SearchedProperty->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">
                                                            LR
                                                            No: {{ $SearchedProperty->lr_no }} Search
                                                            details</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6><strong>Serial No.</strong></h6>
                                                        <p>{{ $SearchedProperty->serial_no }}</p>
                                                        <hr>

                                                        <h6><strong>Location/Situation</strong></h6>
                                                        <p class="mb-0">{{ $SearchedProperty->situation }}</p>
                                                        <hr>

                                                        <h6><strong>Owner</strong></h6>
                                                        <p>{{ $SearchedProperty->owner }}</p>
                                                        <hr>

                                                        <h6><strong>P.O.Box Address</strong></h6>
                                                        <p class="mb-0">
                                                            {{ $SearchedProperty->po_box }}-{{ $SearchedProperty->postal_code }}
                                                        </p>
                                                        <p class="mb-0 d-none">Nairobi,KENYA</p>
                                                        <hr>

                                                        <h6><strong>Approximate Area in Hectares</strong></h6>
                                                        <p>{{ $SearchedProperty->approx_area }}</p>
                                                        <hr>

                                                        <h6><strong>Land Use</strong></h6>
                                                        <p>{{ $SearchedProperty->land_use }}</p>
                                                        <hr>


                                                        <h6><strong>Searched By</strong></h6>
                                                        <p class="mb-0">
                                                            {{ $SearchedProperty->searched_by }}</p>
                                                        <p class="mb-0"><a
                                                                href="mailto:{{ $SearchedProperty->searcher_email }}">{{ $SearchedProperty->searcher_email }}</a>
                                                        </p>
                                                        <hr>

                                                        <h6><strong>Objection Status</strong></h6>
                                                        @if (!$SearchedProperty->is_objected)
                                                            <span class="badge badge-pill d-inline badge-success">Not Objected</span>
                                                        @endif
                                                        @if ($SearchedProperty->is_objected)
                                                            <span class="badge badge-pill d-inline badge-danger">Objected</span>
                                                        @endif
                                                        <hr>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h6 class="text-left"><strong>Unimproved Site
                                                                        Value(USV)</strong></h6>
                                                                <h3 class="text-left">KES
                                                                    {{ number_format($SearchedProperty->usv) }} </h3>
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
        </div>
    </section>

@endsection
@section('scripts')
@endsection
