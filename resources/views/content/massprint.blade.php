<div class="page" id="{{ $ObjectionDetails->properties__lr_no }}" style="page-break-inside: avoid; size: auto; margin: auto; font-family: 'Montserrat', sans-serif; font-size: 12px; letter-spacing: normal;font-weight: 500; 
    -webkit-print-color-adjust: exact; width: 8.3in; position: relative; height: 10.7in; background-color: white; display: flex; 
    flex-flow: column; padding: 0.2in; letter-spacing: normal;">
    <div>
        <!-- page number goes here -->
        <div class="page-number" style="border-bottom:0.001in solid black; margin-bottom: 0.1in;">
            <p style="width: 100%; text-align: center; font-size: 12px; letter-spacing: normal; color: black;">THIS FORM
                CAN BE USED FOR AND
                OBJECTION AGAINST ONLY ONE ENTRY IN THE DRAFT VALUATION ROLL</p>
        </div>

        <div style="flex-direction: column; display: flex; justify-content: center; align-items: center;">
            <p
                style="width: 100%; text-align: center; font-size: 15px; color: black; font-weight: bold; margin-bottom: 10px;">
                NAIROBI CITY COUNTY</p>
            {{-- <img style="height: 100px; margin-left: 20px !important;"
                src="data:image/jpeg;base64,
                    {{ base64_encode(@file_get_contents(url('https://valuation.nairobi.go.ke/dashboard/images/pdf-logo.jpg'))) }}"> --}}
            <p
                style="width: 100%; text-align: center; font-size: 15px; color: black;font-weight: bold; margin-top: 10px;">
                NOTICE OF OBJECTION</p>

        </div>


    </div>
    <div class="" style="width: 100%; height: 10.7in">
        <!-- statement heading -->
        <div style="display: flex; display: -webkit-box;">
            <!-- sender details -->
            <div class="" style="padding: 0.2in; margin-bottom: 0.05in; width: 7.9in; height: auto;">
                <span style=" font-size: 12px; margin: 0px;">To:</span>
                <h5
                    style="font-size: 12px; letter-spacing: normal; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                    THE COUNTY SECRETARY</h5>
                <div style="display:flex; display: -webkit-box; font-size: 12px; letter-spacing: normal;">
                    <div style="display: flex; flex-flow: column; font-size: 12px; letter-spacing: normal;">
                        <span class="" style="font-size: 12px; letter-spacing: normal;">CITY HALL</span>
                        <span style=" font-size: 12px; font-size: 12px; letter-spacing: normal;">P.O.BOX 30075</span>
                        <span style=" font-size: 12px; font-size: 12px; letter-spacing: normal;">NAIROBI</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- statement owner details -->
        <div class=""
            style="padding: 0.2in; margin-bottom: 0.2in; background-color: #f3f5f6; width: 7.9in; height: auto;">
            <span style=" font-size: 12px; margin-bottom: 0.2in;">The following entry has been made in the draft
                valuation roll of the
                <strong>Nairobi City County</strong> for <strong>2019</strong></span>
            <div
                style="margin-top: 0.2in; display: flex; display: -webkit-box; flex-direction: row; flex-wrap: wrap; width: 100%;">
                <!-- Serial -->
                <div
                    style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                    <p style="margin: 0;">Serial No.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $ObjectionDetails->properties__serial_no }}</h5>
                </div>
                <!-- Name -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
            display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                    <p style="margin: 0;">Name of owner.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $ObjectionDetails->properties__owner }}</h5>
                </div>
            </div>
            <div
                style="margin-top: 0.2in; display: flex; display: -webkit-box; flex-direction: row; flex-wrap: wrap; width: 100%;">
                <!-- Landrate Number -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
            display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                    <p style="margin: 0;">L. R. No.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $ObjectionDetails->properties__lr_no }}
                    </h5>
                </div>

                <!-- Situation -->
                <div
                    style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                    <p style="margin: 0;">Situation.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $ObjectionDetails->properties__situation }}
                    </h5>
                </div>

                <!-- Site Value -->
                <div
                    style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                    <p style="margin: 0;">Unimproved Site Value(KES).</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ number_format($ObjectionDetails->properties__usv) }}
                    </h5>
                </div>

            </div>
        </div>

        <div style="margin-bottom: 0.2in;">
            <table style="width: 100%; border: 2px solid #215939; border-collapse: collapse;">
                <thead>
                    <tr style="color: white; text-transform: uppercase; background-color: #215939;">
                        <td style="white-space: normal; padding: 0.05in 0.2in;font-weight: bold;;">#</td>
                        <td style="white-space: normal; padding: 0.05in 0.2in;font-weight: bold;;">Objection</td>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                    <tr style="color: white; text-transform: uppercase; background-color: #215939;">
                        <td colspan="2" style="padding: 0.05in 0.2in;font-weight: bold;;">{{ $ReasonsCount }}
                            Objections
                        </td>
                    </tr>
                    </tr>
                </tfoot>

                <tbody style="border-collapse: collapse;">
                    @foreach ($ObjectionDetails->reasons as $key => $reason)
                        <tr style="color: black;">
                            <td style="white-space: normal; padding: 0.05in 0.2in; border: 2px solid #215939;">
                                {{ $key + 1 }}</td>
                            <td style="white-space: normal; padding: 0.05in 0.2in; border: 2px solid #215939;">
                                <small>{{ $reason->description }}
                                </small>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 0.2in; display: flex; display: -webkit-box; justify-content: space-between;">
            <div>
                <div>
                    <div style="display: flex; display: -webkit-box; margin-bottom: 0.05in">
                        <p style="margin-bottom: 0; white-space: nowrap;">
                            <span style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">
                                Signature
                                of objector</span>
                            <span
                                style="margin-bottom: 0;  font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 643px;">
                                {{ $ObjectionDetails->objector__first_name }}
                                {{ $ObjectionDetails->objector__last_name }}
                            </span>
                        </p>
                    </div>
                    <div style="display: flex; display: -webkit-box; margin-bottom: 0.05in">
                        <p style="margin-bottom: 0; white-space: nowrap;">
                            <span
                                style="margin-bottom: 0;  font-size: 12px; color: black; text-transform: capitalize; word-wrap: normal;">
                                State
                                if Ratable
                                Owner or Otherwise of objector</span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 495px;">
                                {{ $ObjectionDetails->ratable_owner }}
                                @csrf
                                @if (!$ObjectionDetails->ratable_owner)
                                    NO
                                @endif
                                @if ($ObjectionDetails->ratable_owner)
                                    YES
                                @endif
                            </span>
                        </p>
                    </div>
                    <div style="display: flex; display: -webkit-box; margin-bottom: 0.05in">
                        <p style="margin-bottom: 0; white-space: nowrap;">
                            <span
                                style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">Full
                                Address of
                                Objector P.O.Box
                                of objector</span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 517px;">
                                {{ $ObjectionDetails->postal_address }}
                            </span>
                        </p>
                    </div>
                    <div style="display: flex; display: -webkit-box; margin-bottom: 0.05in">
                        <p style="margin-bottom: 0; white-space: nowrap;">
                            <span
                                style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">Dated
                                this</span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 50px; font-weight: bold;">
                                {{ date('d', strtotime($ObjectionDetails->objection_date)) }}</span>
                            <span
                                style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">day
                                of
                            </span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 80px;">
                                {{ date('M', strtotime($ObjectionDetails->objection_date)) }} 2021</span>
                            <span style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">
                                telephone no</span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 452px;">
                                {{ $ObjectionDetails->phone }}</span>
                        </p>
                    </div>
                    <div style="display: flex; display: -webkit-box; margin-bottom: 0.05in">
                        <p style="margin-bottom: 0; white-space: nowrap;">
                            <span
                                style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">Shs
                                500/= Non refundable
                                fee Receipt
                                No</span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 115px; font-weight: bold;">
                                OBJ-24586</span>
                            <span
                                style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">Dated
                            </span>
                            <span
                                style="margin-bottom: 0; font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 280px;">
                                {{ date('d-m-Y', strtotime($ObjectionDetails->objection_date)) }}</span>
                            <span style="margin-bottom: 0; font-size: 12px; color: black; text-transform: capitalize;">
                                (DD/MM/YY)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <!-- page number goes here -->
            <div class="page-number" style="border-top:0.001in solid black; margin-bottom: 0.1in; margin-top: 0.1in;">
                <p style="width: 100%; text-align: center; font-size: 12px; letter-spacing: normal; color: black;">THIS
                    SPACE IS NOT TO BE
                    FILLED IN BY THE OBJECTOR</p>
                <p style="width: 100%; text-align: center; font-size: 15px; color: black;font-weight: bold;">
                    VALUATION COURT DETAILS</p>
                <p
                    style="width: 100%; text-align: center; font-size: 12px; letter-spacing: normal; color: black; margin-top: 0.1in;">
                    <span style=" font-size: 12px; color: black; text-transform: capitalize;">Date of
                        hearing...............................................................................................(DD/MM/YY)</span>
                </p>

                <div
                    style="margin-top: 0.2in; display: flex; display: -webkit-box; flex-direction: row; flex-wrap: nowrap; width: 100%;">
                    <!-- Reduced To -->
                    <div
                        style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                    display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                        <p style="margin: 0;">Reduced To</p>
                        <p
                            style="width: 100%; text-align: left; font-size: 12px; letter-spacing: normal; color: black; margin-top: 0.3in;">
                            <span style=" font-size: 12px; color: black; text-transform: capitalize;">KES
                                ...................................................................</span>
                        </p>
                    </div>
                    <!-- Confirmed -->
                    <div
                        style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                        <p style="margin: 0;">Confirmed</p>
                        <p
                            style="width: 100%; text-align: left; font-size: 12px; letter-spacing: normal; color: black; margin-top: 0.3in;">
                            <span
                                style="color: black; text-transform: capitalize;">............................................................................</span>
                        </p>
                    </div>
                    <!-- Increased To -->
                    <div
                        style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                        display: flex; flex-direction: column; flex-basis: 100%;-webkit-box-flex: 1; -webkit-flex: 1; flex: 1;">
                        <p style="margin: 0;">Increased To</p>
                        <p
                            style="width: 100%; text-align: left; font-size: 12px; letter-spacing: normal; color: black; margin-top: 0.3in;">
                            <span style=" font-size: 12px; color: black; text-transform: capitalize;">KES
                                ...................................................................</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
