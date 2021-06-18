@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Property Objection</h4>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ol class="breadcrumb border-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Objections</li>
                        <li class="breadcrumb-item active">Property Objection</li>
                    </ol>
                </div>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Valuation Roll Objections</h4>
                    <p>The table below shows a list of NCCG Draft Valuation Roll Objections</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="roll-data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Objection Id</th>
                                    <th>Serial No.</th>
                                    <th>LR No.</th>
                                    <th>Situation</th>
                                    <th>Owner</th>
                                    <th>Phone</th>
                                    <th>Documents</th>
                                    <th>Payment Status</th>
                                    <th>Objection Date</th>
                                    <th>USV</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Objections as $key => $Objection)
                                    @if ($Objection->status === 'Paid')
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>PV-2021-{{ $Objection->id }}</td>
                                            <td>{{ $Objection->property->serial_no }}</td>
                                            <td>{{ $Objection->property->lr_no }}</td>
                                            <td>
                                                <p class="mb-0">{{ $Objection->property->situation }}</p>
                                                <p class="mb-0 d-none">
                                                    <small>Kasarani Road</small>
                                                </p>
                                            </td>
                                            <td>{{ $Objection->property->owner }}</td>
                                            <td><a href="tel:{{ $Objection->phone }}">{{ $Objection->phone }}</a></td>
                                            <td><a href="#" data-toggle="modal"
                                                    data-target="#objection-documents{{ $key + 1 }}">{{ count($Objection->documents) }}
                                                    Documents</a></td>
                                            <td>
                                                @if ($Objection->status === 'Pending')
                                                    <span
                                                        class="badge badge-pill d-inline badge-warning">{{ $Objection->status }}
                                                    </span>
                                                @endif
                                                @if ($Objection->status === 'Paid')
                                                    <span
                                                        class="badge badge-pill d-inline badge-success">{{ $Objection->status }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ date('d M Y h:i A', strtotime($Objection->objection_date)) }}</td>
                                            <td>KES {{ number_format($Objection->property->usv) }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn--icon-text ml-2"
                                                    data-toggle="modal" data-target="#details{{ $Objection->id }}"><i
                                                        class="zmdi zmdi-eye"></i>Details</button>
                                                <a href="singleobjection/{{ $Objection->property->serial_no }}"
                                                    target="_blank" class="btn btn-success btn-sm btn--icon-text"><i
                                                        class="zmdi zmdi-print"></i>Print</a>
                                                <button type="button"
                                                    class="btn btn-warning d-none btn-sm btn--icon-text ml-2"
                                                    data-toggle="modal" data-target="#edit-car-booking"><i
                                                        class="zmdi zmdi-edit"></i>Edit</button>
                                                <button type="button"
                                                    class="btn btn-danger btn-sm btn--icon-text ml-2 d-none"
                                                    title="delete this property" data-toggle="modal"
                                                    data-target="#deactivate-property"><i
                                                        class="zmdi zmdi-block"></i>Delete</button>
                                            </td>

                                            <!-- Modals -->

                                            <!-- objector documents -->
                                            <div class="modal fade" id="objection-documents{{ $key + 1 }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-capitalize"
                                                                id="exampleModalLongTitle">
                                                                LR No: {{ $Objection->property->lr_no }} objection
                                                                documents
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            @if (count($Objection->documents) > 0)
                                                                <h6><strong>Click to download</strong></h6>
                                                                <ul style="padding-left: 20px;">
                                                                    @foreach ($Objection->documents as $key => $document)
                                                                        <li>
                                                                            <a href="{{ $document->url }}"
                                                                                download>{{ $document->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                            @if (count($Objection->documents) == 0)
                                                                <h5>No Documents</h5>
                                                            @endif

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success btn-secondary"
                                                                data-dismiss="modal">OK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- objection modal -->
                                            <div class="modal fade" id="details{{ $Objection->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-capitalize"
                                                                id="exampleModalLongTitle">
                                                                LR No: {{ $Objection->property->lr_no }} objection
                                                                details
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h6><strong>Serial No.</strong></h6>
                                                            <p>{{ $Objection->property->serial_no }}</p>
                                                            <hr>

                                                            <h6><strong>Location/Situation</strong></h6>
                                                            <p class="mb-0">{{ $Objection->property->situation }}</p>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <h6><strong>Owner</strong></h6>
                                                                    <p>{{ $Objection->property->owner }}</p>

                                                                    <h6><strong>P.O.Box Address</strong></h6>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property->po_box }}-{{ $Objection->property->postal_code }}
                                                                    </p>
                                                                    <p class="mb-0">{{ $Objection->property->situation }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <h6><strong>Objector</strong></h6>
                                                                    <p>{{ $Objection->objector_name }}</p>

                                                                    <h6><strong>P.O.Box Address</strong></h6>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property->po_box }}-{{ $Objection->property->postal_code }}
                                                                    </p>
                                                                    <p class="mb-0">{{ $Objection->property->situation }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <h6><strong>Approximate Area in Hectares</strong></h6>
                                                            <p>{{ $Objection->property->approx_area }}</p>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h6><strong>Objection Date</strong></h6>
                                                                    <p>{{ date('d M Y h:i A', strtotime($Objection->objection_date)) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <h6><strong>Objections</strong></h6>
                                                            <ul>
                                                                @foreach ($Objection->reasons as $key => $reason)
                                                                    <li>{{ $reason->description }}</li>
                                                                @endforeach
                                                            </ul>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h6 class="text-left"><strong>Unimproved Site
                                                                            Value(USV)</strong></h6>
                                                                    <h3 class="text-left">KES
                                                                        {{ number_format($Objection->property->usv) }}
                                                                    </h3>
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

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script>
        function printObjection(SerialNo) {
            // alert(SerialNo);
            let url =
                "singleobjection/:LRNo";
            url = url.replace(':LRNo', SerialNo + '.0');
            // document.location.href = url;
            window.open(url);
        }

    </script>

@endsection