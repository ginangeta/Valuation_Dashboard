@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Payments</h4>
            <div class="">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Payments</li>

                </ol>
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
                                    <th>Receipt No</th>
                                    <th>Ref No.</th>
                                    <th>Objection No.</th>
                                    <th>Transaction Date.</th>
                                    <th>Transacted By</th>
                                    <th>Phone No.</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td>{{$payment->bill_no}}</td>
                                    <td>PCP{{$payment->bill_no}}</td>
                                    <td>OBJ-2021-20856/19</td>
                                    <td>{{$payment->created_at}}</td>
                                    <td class="w60">
                                        <a href="#" data-toggle="modal" data-target="#objector-details">Nigel Adema</a>
                                    </td>
                                    <td><a href="tel:=254 700 112 233">+254 700 112 233</a></td>
                                    <td class="text-capitalize">KES {{$payment->total}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success btn-sm btn--icon-text"><i
                                                class="zmdi zmdi-print"></i>Print</a>
                                        &nbsp;
                                        <a href="#" data-toggle="modal" data-target="#objection-details"
                                            class="btn btn-primary btn-sm btn--icon-text"><i class="zmdi zmdi-eye"></i>View
                                            details</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <!-- objector modal -->
        <div class="modal fade" id="objector-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="width: 800px; left: -100px;">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">LR No: 57/252 property
                            objector details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered input-table table-striped" id="modal-data-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Receipt No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>P.O.Box</th>
                                        <th>Relation to Owner</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>OBJ-24586</td>
                                        <td>
                                            Sheila Onyango
                                        </td>
                                        <td>
                                            <p><a href="tel:+25411223344">+254 112 223 344</a></p>
                                        </td>
                                        <td>
                                            <p><a href="mailto:sheilaonyango@email.com">sheilaonyango@email.com</a></p>
                                        </td>
                                        <td>
                                            <p class="mb-0">58504-00200</p>
                                            <p class="mb-0">
                                                <small>Nairobi,KENYA</small>
                                            </p>
                                        </td>
                                        <td>
                                            LAWYER
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-secondary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- objection modal -->
        <div class="modal fade" id="objection-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="exampleModalLongTitle">LR No: 57/252 objection
                            details
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <h6><strong>Serial No.</strong></h6>
                        <p>000004</p>
                        <hr>

                        <h6><strong>Location/Situation</strong></h6>
                        <p class="mb-0">Kasarani-Thika Road</p>
                        <hr>

                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <h6><strong>Owner</strong></h6>
                                <p>RICHARD GITHINGA GITHUA</p>

                                <h6><strong>P.O.Box Address</strong></h6>
                                <p class="mb-0">9385-00618</p>
                                <p class="mb-0">Nairobi,KENYA</p>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h6><strong>Objcetor</strong></h6>
                                <p>SHARON ONYANGO</p>

                                <h6><strong>P.O.Box Address</strong></h6>
                                <p class="mb-0">9385-00618</p>
                                <p class="mb-0">Nairobi,KENYA</p>
                            </div>
                        </div>
                        <hr>

                        <h6><strong>Approximate Area in Hectares</strong></h6>
                        <p>0.0207</p>
                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <h6><strong>Objection Date</strong></h6>
                                <p>25th Mar 2021</p>
                            </div>

                            <div class="col-6">
                                <h6><strong>Time</strong></h6>
                                <p>11:45:26 AM</p>
                            </div>
                        </div>
                        <hr>

                        <h6><strong>Objections</strong></h6>
                        <ul>
                            <li>USV does not conquer with the current property market value</li>
                            <li>Property has no viable transportation access</li>
                            <li>Has it's own water source</li>
                        </ul>
                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <h6 class="text-left"><strong>Unimproved Site Value(USV)</strong></h6>
                                <h3 class="text-left">KES 3,942,900 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-secondary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->

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
