@extends('layouts.frame')
@section('content')

    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Withdrawn Objections</h4>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ol class="breadcrumb border-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Withdrawn Objections</li>
                    </ol>
                </div>
                <div class="col-sm-12 col-md-6 justify-content-end align-items-center d-none">
                    <div class="form-group mt-0 mb-0 mx-2">
                        <button type="button" class="btn btn-success btn-print-docs">Print
                            Objections</button>
                    </div>
                    <div class="form-group mt-0 mb-0">
                        <button type="button" data-target="#objectionmodal" data-toggle="modal"
                            class="btn btn-success btn-info">Search Objection</button>
                    </div>
                </div>

                <!-- bill request modal -->
                <div class="modal fade" id="objectionmodal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ route('getSearchedObjection') }}" id="searchbill" method="POST">
                                @csrf
                                @if (Session::has('success'))
                                    <p class="alert alert-success">
                                        {{ Session::get('success') }}</p>
                                @endif
                                @if (Session::has('errors'))
                                    <p class="alert alert-danger">{{ Session::get('errors') }}
                                    </p>
                                @endif
                                <div class="modal-header">

                                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Search Objection Modal
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <h6><strong>LR Number/Serial Number</strong></h6>
                                        <input type="text" class="form-control filter-input mt-0" name="billNumber"
                                            placeholder="Enter to search objection">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!-- show if payment was successful -->
                                    <button type="submit" onclick="$('#searchbill').submit();"
                                        class="btn btn-success btn--icon-text" data-dismiss="modal"
                                        aria-label="Close">Search Objection</button>

                                    <!-- show if payment was successful or when there is a need for closing -->
                                    <button type="button" id="close"
                                        class="btn btn-outline-dark text-black btn--icon-text d-none" data-dismiss="modal"
                                        aria-label="Close">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Valuation Roll Objections</h4>
                    <p>The table below shows a list of NCCG Draft Valuation Roll Withdrawn Objections</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered input-table table-striped" id="roll-data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Objection Id</th>
                                    <th>LR No.</th>
                                    <th>Situation</th>
                                    <th>Owner</th>
                                    <th>Phone</th>
                                    <th>Withdrawn By</th>
                                    <th>Payment Status</th>
                                    <th>Objection Date</th>
                                    <th>USV</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="roll-table-body">
                                @foreach ($Objections as $key => $Objection)
                                    @if ($Objection->property_objection->status === 'Paid')

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $Objection->property_objection->objection_no }}</td>
                                            <td>{{ $Objection->property_objected->lr_no }}</td>
                                            <td>
                                                <p class="mb-0">{{ $Objection->property_objected->situation }}</p>
                                            </td>
                                            <td>{{ $Objection->property_objected->owner }}</td>
                                            <td><a
                                                    href="tel:{{ $Objection->property_objection->phone }}">{{ $Objection->property_objection->phone }}</a>
                                            </td>
                                            <td><a
                                                    href="mailto:{{ $Objection->withdrawn_by }}">{{ $Objection->withdrawn_by }}</a>
                                            </td>
                                            <td>
                                                @if ($Objection->property_objection->status === 'Pending')
                                                    <span
                                                        class="badge badge-pill d-inline badge-warning">{{ $Objection->property_objection->status }}
                                                    </span>
                                                @endif
                                                @if ($Objection->property_objection->status === 'Paid')
                                                    <span
                                                        class="badge badge-pill d-inline badge-success">{{ $Objection->property_objection->status }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ date('d M Y h:i A', strtotime($Objection->property_objection->objection_date)) }}
                                            </td>
                                            <td>KES {{ number_format($Objection->property_objected->usv) }}</td>
                                            <td class="table-actions">
                                                <button type="button" class="btn btn-info btn-sm btn--icon-text ml-2"
                                                    data-toggle="modal"
                                                    data-target="#details{{ $Objection->property_objection->id }}"><i
                                                        class="zmdi zmdi-eye"></i>Details</button>
                                                {{-- @if (strpos($Objection->property_objected->lr_no, '/') !== false)
                                                <a href="singleobjection/{{ str_replace('/', '-', $Objection->property_objected->lr_no) }}"
                                                    target="_blank"
                                                    class="btn-singleobjection btn btn-success btn-sm btn--icon-text"><i
                                                        class="zmdi zmdi-print"></i>Print</a>
                                            @else
                                                <a href="singleobjection/{{ str_replace('-', '+', $Objection->property_objected->lr_no) }}"
                                                    target="_blank" class="btn btn-success btn-sm btn--icon-text"><i
                                                        class="zmdi zmdi-print"></i>Print</a>
                                            @endif --}}
                                            </td>

                                            <!-- Modals -->

                                            <!-- objection modal -->
                                            <div class="modal fade" id="details{{ $Objection->property_objection->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-capitalize"
                                                                id="exampleModalLongTitle">
                                                                LR No: {{ $Objection->property_objected->lr_no }}
                                                                objection
                                                                details
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h6><strong>Serial No.</strong></h6>
                                                            <p>{{ $Objection->property_objected->serial_no }}</p>
                                                            <hr>

                                                            <h6><strong>Location/Situation</strong></h6>
                                                            <p class="mb-0">
                                                                {{ $Objection->property_objected->situation }}
                                                            </p>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <h6><strong>Owner</strong></h6>
                                                                    <p>{{ $Objection->property_objected->owner }}</p>

                                                                    <h6><strong>P.O.Box Address</strong></h6>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property_objected->po_box }}-{{ $Objection->property_objected->postal_code }}
                                                                    </p>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property_objected->situation }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <h6><strong>Objector</strong></h6>
                                                                    <p>{{ $Objection->property_objection->objector_name }}
                                                                    </p>

                                                                    <h6><strong>P.O.Box Address</strong></h6>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property_objected->po_box }}-{{ $Objection->property_objected->postal_code }}
                                                                    </p>
                                                                    <p class="mb-0">
                                                                        {{ $Objection->property_objected->situation }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            <h6><strong>Approximate Area in Hectares</strong></h6>
                                                            <p>{{ $Objection->property_objected->approx_area }}</p>
                                                            <hr>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h6><strong>Objection Date</strong></h6>
                                                                    <p>{{ date('d M Y h:i A', strtotime($Objection->property_objection->objection_date)) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>

                                                            {{-- <h6><strong>Objections</strong></h6>
                                                        <ul>
                                                            @foreach ($Objection->property_objection->reasons as $key => $reason)
                                                                <li>{{ $reason->description }}</li>
                                                            @endforeach
                                                        </ul>
                                                        <hr> --}}

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h6 class="text-left"><strong>Unimproved Site
                                                                            Value(USV)</strong></h6>
                                                                    <h3 class="text-left">KES
                                                                        {{ number_format($Objection->property_objected->usv) }}
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

    <script type="text/javascript">
        $(document).ready(function() {
            var current = '{{ Session::get('paginationCurrent') }}';
            if (current != '') {
                current = current.split('=');
                $('.current').html(current[1]);
            } else {
                $('.current').html("1");
            }

            var next = '{{ Session::get('paginationNext') }}';
            if (next != '') {
                next = next.split('?');
                next = next[1];
                $('#roll-data-table_next').removeClass('disabled');
                $('#roll-data-table_next').on('click', function(e) {
                    e.preventDefault();
                    let url = "{{ URL::to('getObjections/:PageNo') }}";
                    url = url.replace(':PageNo', next);
                    window.location.href = url

                    // document.location.href = url;
                    // window.open(url);
                });
            } else {
                $('#roll-data-table_next').addClass('d-none');
            }

            console.log(next);

            var prev = '{{ Session::get('paginationPrev') }}';
            if (prev != '') {
                $('#roll-data-table_previous').removeClass('disabled');

                if (prev.includes('?')) {
                    prev = prev.split('?');
                    prev = prev[1];
                    $('#roll-data-table_previous').on('click', function(e) {
                        let url = "{{ URL::to('getObjections/:PageNo') }}";
                        e.preventDefault();
                        url = url.replace(':PageNo', prev);
                        window.location.href = url

                        // document.location.href = url;
                        // window.open(url);
                    });
                } else {
                    prev = '';
                    $('#roll-data-table_previous').on('click', function(e) {
                        let url = "{{ URL::to('getAllObjections') }}";
                        e.preventDefault();
                        url = url.replace(':PageNo', prev);
                        window.location.href = url

                        // document.location.href = url;
                        // window.open(url);
                    });
                }
            } else {
                $('#roll-data-table_previous').addClass('d-none');
            }

            console.log(prev);
        });
    </script>
    {{-- <script type="text/javascript">
        $('.btn-print-docs').on('click', function(e) {
            e.preventDefault();
            var forPDF = $("#roll-table-body").find(".page");
            var len = forPDF.length;
            console.log(len);

            for (var i = 0; i < forPDF.length; i++) {
                var PDFname = $(forPDF[i]).attr('id');
                html2canvas(forPDF[0], {
                    onrendered: function(canvas) {
                        document.body.appendChild(canvas);
                        var ctx = canvas.getContext('2d');
                        var imgData = canvas.toDataURL("image/png", 1.0);
                        var width = canvas.width;
                        var height = canvas.clientHeight;
                        pdf.addImage(imgData, 'PNG', 20, 20, (width - 10), (height));

                    }
                });

                html2canvas(forPDF[0], {
                    allowTaint: true,
                    onrendered: function(canvas) {
                        var ctx = canvas.getContext('2d');
                        var imgData = canvas.toDataURL("image/png", 1.0);
                        var htmlH = $(".page2").height() + 100;
                        var width = canvas.width;
                        var height = canvas.clientHeight;
                        pdf.addPage(580, htmlH);
                        pdf.addImage(imgData, 'PNG', 20, 20, (width - 40), (height));
                    }
                });

                setTimeout(function() {
                    //jsPDF code to save file
                    pdf.save('OBJECTIONS.pdf');
                }, 0);

            }

        });
    </script> --}}

    <script type="text/javascript">
        $('.btn-print-docs').on('click', function(e) {
            e.preventDefault();

            console.log("Here");

            var forPDF = $("#roll-table-body").find(".btn-singleobjection");
            var len = forPDF.length;
            var PDFlinks;
            console.log(len);

            for (var i = 0; i < forPDF.length; i++) {
                PDFlinks.push(forPDF[i].href);
            }

            console.log(PDFlinks);

            loadPdf: function(pdfUrl, pdfindex, next) {
                var self = this;
                PDFJS.getDocument(pdfUrl).then(function(pdf) {

                    var currentPage = 1;

                    function getPage() {
                        pdf.getPage(currentPage).then(function(page) {
                            var scale = 2,
                                viewport = page.getViewport(scale),
                                canvas = document.createElement('canvas'),
                                context = canvas.getContext('2d'),
                                renderContext = {
                                    canvasContext: context,
                                    viewport: viewport,
                                    intent: 'print'
                                };

                            // Prepare canvas using PDF page dimensions

                            canvas.setAttribute('class', 'canvaspdf');
                            canvas.id = 'canvas' + currentPage + '-' + pdfindex;
                            canvas.height = viewport.height;
                            canvas.width = viewport.width;

                            // Render PDF page into canvas context

                            page.render(renderContext).then(function(page) {
                                document.body.appendChild(canvas);
                                if (currentPage < pdf.numPages) {
                                    currentPage++;
                                    getPage();
                                } else {
                                    next();
                                }
                            });
                        });
                    }

                    if (currentPage < pdf.numPages) {
                        getPage();
                    }
                });
            }

            var pdfUrls = [PDFlinks],

                next = function() {
                    if (pdfUrls.length === 0) {
                        window.print();
                    } else {
                        self.loadPdf(pdfUrls.pop(), pdfUrls.length, next);
                    }
                };

            for (var j in coredatalist) {
                if (coredatalist.hasOwnProperty(j)) {
                    pdfUrls.push('url');
                }
            }

            next();
        });
    </script>

@endsection
