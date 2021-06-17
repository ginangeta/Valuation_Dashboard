@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Payments</h4>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ol class="breadcrumb border-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Payment</li>
                        <li class="breadcrumb-item active">Bill</li>
                    </ol>
                </div>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Objection Payments</h4>
                    <p>The table below shows a list of M-pesa payments done during the objection of NCCG Draft Valuation
                        Roll as of March 2021</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Bill No</th>
                                    <th>Objection No.</th>
                                    <th>Transaction Date.</th>
                                    <th>Transacted By</th>
                                    <th>Status</th>
                                    <th>Bill Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    @if (!is_null($payment->status))
                                        <tr>
                                            <td>{{ $payment->bill_no }}</td>
                                            <td>{{ $payment->objection_no }}</td>
                                            <td>{{ date('d M Y h:i A', strtotime($payment->created_at)) }}</td>
                                            <td class="w60">{{ $payment->billed_user }}</td>
                                            <td>
                                                @if ($payment->status !== 'Paid')
                                                    <span class="listview__item chat__busy">{{ $payment->status }}</span>
                                                @else
                                                    <span
                                                        class="listview__item chat__available">{{ $payment->status }}</span>
                                                @endif

                                            </td>
                                            <td class="text-capitalize">KES {{ $payment->total }}</td>
                                            <td>
                                                &nbsp;
                                                <a href="#" data-toggle="modal"
                                                    data-target="#payment-details{{ $payment->bill_no }}"
                                                    class="btn btn-primary btn-sm btn--icon-text"><i
                                                        class="zmdi zmdi-eye"></i>View
                                                    details</a>
                                            </td>
                                        </tr>
                                        <!-- objection modal -->
                                        <div class="modal fade" id="payment-details{{ $payment->bill_no }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">
                                                            Bill No: {{ $payment->bill_no }} payment
                                                            details
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6><strong>Objection No.</strong></h6>
                                                        <p>{{ $payment->objection_no }}</p>
                                                        <hr>

                                                        <h6><strong>Objection Items</strong></h6>
                                                        @if (count($payment->bill_items) > 0)
                                                            <ul style="padding-left: 20px;">
                                                                @foreach ($payment->bill_items as $key => $item)
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p>{{ $item->description }}</p>
                                                                            <p>KES {{ number_format($item->amount) }}
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                        <hr>

                                                        <h6><strong>Paid By</strong></h6>
                                                        <p>{{ $payment->billed_user }}</p>
                                                        <hr>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h6><strong>Payment Date</strong></h6>
                                                                <p>{{ date('d M Y h:i A', strtotime($payment->created_at)) }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <h6><strong>Payment Status</strong></h6>
                                                        <span
                                                            class="badge badge-pill d-inline badge-warning">{{ $payment->status }}</span>
                                                        <hr>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success btn-secondary"
                                                            data-dismiss="modal">OK</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
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
