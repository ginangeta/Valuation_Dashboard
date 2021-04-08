@extends('layouts.frame')
@section('content')
    <section class="content">
        <header class="content__title px-0 border-0">
            <h4 class="p-0 mb-0 cl">Add Property</h4>
            <div class="">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Valuation Roll</li>
                    <li class="breadcrumb-item active">Add Property</li>
                </ol>
            </div>
        </header>

        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>Upload Valuation Roll</h4>
                    <p>Click the file insert below to upload valuation roll</p>
                </div>
                <div class="card-body">
                    <div class="form-body">
                        <div class="slider-container1 wow animated slideInLeft">
                            <form id="submit-property-file" class="">
                                @csrf
                                @if (Session::has('success'))
                                    <p class="alert alert-success">
                                        {{ Session::get('success') }}</p>
                                @endif
                                @if (Session::has('errors'))
                                    <p class="alert alert-danger">{{ Session::get('errors') }}
                                    </p>
                                @endif
                                <div class="row form-contents">
                                    <div class="col-sm-12 col-md-5 col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Valuation Roll Year</label>
                                            <select class=" form-control selectpicker" data-live-search="true">
                                                <option>-- Select valuation roll year--</option>
                                                <option>2021</option>
                                            </select>
                                        </div>
                                    </div>

                                    <label class="col-12 form-attach mb-2" for="upload_roll">
                                        <div class="id-container img-container">
                                            <span><img src="demo/img/form-svgs/xls.svg"></span>
                                            <h5>Valuation Roll</h5>
                                            <p>Attach the valuation roll</p>
                                            <small class="text-danger"><strong>No file selected</strong></small>
                                            <!-- national id input box -->
                                            <input type="file" name="upload_roll" required
                                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                                id="upload_roll" class="form-control nat-id d-none">
                                        </div>
                                    </label>

                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-footer w-100">
                                            <div class="form-btns d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-success btn-next btn-upload-roll">Submit <span
                                                        class="mdi mdi-check-all mx-2"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>

                        </div>

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
    <script type="text/javascript">
        $('.btn-upload-roll').on('click', function(e) {
            e.preventDefault();

            var file = $('#upload_roll').val();
            // var formData = new FormData($('#upload_roll'));

            var fd = new FormData();
            var files = $('#upload_roll');

            var form_data = new FormData();
            form_data.append("file", files);

            console.log(fd);
            console.log('{{ $session }}');

            $.ajax({
                url: "{{ config('global.url') }}" + 'uploaded_files/',
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': 'JWT {{ $session }}'
                },
                data: {
                    file_name: form_data,
                },
                enctype: 'multipart/form-data',
                cache: false,
                content_type='multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW',
                processData: false,

                success: function(data) {
                    console.log("Upload Response: " + response);

                    if (response == "") {
                        swal('Error!', 'File did not upload successfully', 'error');
                        console.log('Nothing');
                        return;
                    }

                    if (response.status == 200) {
                        swal('Success!', 'File upload successful', 'error');
                        console.log('Here');
                        window.location.reload(false); 

                    } else {
                        console.log('Failed');
                        swal('Error!', data.message, 'error');
                        return;
                    }
                }
            });
        });

    </script>
@endsection
