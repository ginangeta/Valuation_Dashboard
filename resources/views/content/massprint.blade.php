<div class="page d-none" id="{{ $Objection->property->lr_no }}"
    style="width: 8.3in; position: relative; height: 11.7in; background-color: white; display: flex; flex-flow: column; padding: 0.2in;">
    <div>
        <!-- page number goes here -->
        <div class="page-number" style="border-bottom:0.001in solid black; margin-bottom: 0.1in;">
            <p style="width: 100%; text-align: center; font-size: 11px; color: black;">THIS FORM CAN BE USED FOR AND
                OBJECTION AGAINST ONLY ONE ENTRY IN THE DRAFT VALUATION ROLL</p>
        </div>

        <div style="flex-direction: column; display: flex; justify-content: center; align-items: center;">
            <p
                style="width: 100%; text-align: center; font-size: 20px; color: black; font-weight: bold; margin-bottom: 10px;">
                NAIROBI CITY COUNTY</p>
            <img src="{{ asset('demo/img/logo-files/nairobi-county2.png') }}" style="height: 100px;">
            <p
                style="width: 100%; text-align: center; font-size: 20px; color: black;font-weight: bold; margin-top: 10px;">
                NOTICE OF OBJECTION</p>

        </div>


    </div>
    <div class="" style="width: 100%; height: 10.7in">
        <!-- statement heading -->
        <div style="display: flex;">
            <!-- sender details -->
            <div class="" style="padding: 0.2in; margin-bottom: 0.05in; width: 7.9in; height: auto;">
                <span style="margin: 0px;">To:</span>
                <h5 style="font-size: 11px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                    THE COUNTY SECRETARY</h5>
                <div style="display:flex; font-size: 11px;">
                    <div style="display: flex; flex-flow: column; font-size: 11px;">
                        <span class="" style="font-size: 11px;">CITY HALL</span>
                        <span style="font-size: 11px;">P.O.BOX 30075</span>
                        <span style="font-size: 11px;">NAIROBI</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- statement owner details -->
        <div class=""
            style="padding: 0.2in; margin-bottom: 0.2in; background-color: #f3f5f6; width: 7.9in; height: auto;">
            <span style="margin-bottom: 0.2in;">The following entry has been made in the draft valuation roll of the
                <strong>Nairobi City County</strong> for <strong>2021</strong></span>
            <div style="margin-top: 0.2in; display: flex; flex-direction: row; flex-wrap: wrap; width: 100%;">
                <!-- Serial -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p style="margin: 0;">Serial No.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $Objection->property->serial_no }}</h5>
                </div>
                <!-- Name -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
            display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p style="margin: 0;">Name of owner.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $Objection->property->owner }}</h5>
                </div>
            </div>
            <div style="margin-top: 0.2in; display: flex; flex-direction: row; flex-wrap: wrap; width: 100%;">
                <!-- Landrate Number -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
            display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p style="margin: 0;">L. R. No.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $Objection->property->lr_no }}
                    </h5>
                </div>

                <!-- Situation -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p style="margin: 0;">Situation.</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ $Objection->property->situation }}
                    </h5>
                </div>

                <!-- Site Value -->
                <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p style="margin: 0;">Unimproved Site Value(KES).</p>
                    <h5
                        style="font-size: 13px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{ number_format($Objection->property->usv) }}
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
                        <td colspan="2" style="padding: 0.05in 0.2in;font-weight: bold;;">3 Objections</td>
                    </tr>
                    </tr>
                </tfoot>

                <tbody style="border-collapse: collapse;">
                    @foreach ($Objection->reasons as $key => $reason)
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
        <div style="margin-bottom: 0.2in; display: flex; justify-content: space-between;">
            <div>
                <div>
                    <div style="display: flex; margin-bottom: 0.05in">
                        <span style="color: black; text-transform: capitalize;">Signature
                            of objector</span>
                        <span
                            style=" font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 643px;">{{ $Objection->objector_name }}
                        </span>
                    </div>
                    <div style="display: flex; margin-bottom: 0.05in">
                        <span style="color: black; text-transform: capitalize; word-wrap: normal;">State
                            if Ratable
                            Owner or Otherwise of objector</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 495px;">
                            {{ $Objection->ratable_owner }}
                            @csrf
                            @if (!$Objection->ratable_owner)
                                NO
                            @endif
                            @if ($Objection->ratable_owner)
                                YES
                            @endif
                        </span>
                    </div>
                    <div style="display: flex; margin-bottom: 0.05in">
                        <span style="color: black; text-transform: capitalize;">Full Address of
                            Objector P.O.Box
                            of objector</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 517px;">{{ $Objection->postal_address }}
                        </span>
                    </div>
                    <div style="display: flex; margin-bottom: 0.05in">
                        <span style="color: black; text-transform: capitalize;">Dated this</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 50px; font-weight: bold;">{{ date('d', strtotime($Objection->objection_date)) }}</span>
                        <span style="color: black; text-transform: capitalize;">day of</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 80px;">{{ date('M', strtotime($Objection->objection_date)) }}</span>
                        <span style="color: black; text-transform: capitalize;">telephone no</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 452px;">{{ $Objection->phone }}</span>
                    </div>
                    <div style="display: flex; margin-bottom: 0.05in">
                        <span style="color: black; text-transform: capitalize;">Shs 500/= Non refundable fee Receipt
                            No</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 120px; font-weight: bold;">OBJ-24586</span>
                        <span style="color: black; text-transform: capitalize;">Dated</span>
                        <span
                            style="font-size: 13px; margin-left:0.05in; border-bottom: 1px dotted black; font-weight: bold; width: 380px;">{{ date('d-m-Y', strtotime($Objection->objection_date)) }}</span>
                        <span style="color: black; text-transform: capitalize;">(DD/MM/YY)</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <!-- page number goes here -->
            <div class="page-number" style="border-top:0.001in solid black; margin-bottom: 0.1in;">
                <p style="width: 100%; text-align: center; font-size: 11px; color: black;">THIS SPACE IS NOT TO BE
                    FILLED IN BY THE OBJECTOR</p>
                <p style="width: 100%; text-align: center; font-size: 15px; color: black;font-weight: bold;">
                    VALUATION COURT DETAILS</p>
                <p style="width: 100%; text-align: center; font-size: 11px; color: black; margin-top: 0.1in;"><span
                        style="color: black; text-transform: capitalize;">Date of
                        hearing...............................................................................................(DD/MM/YY)</span>
                </p>

                <div style="margin-top: 0.2in; display: flex; flex-direction: row; flex-wrap: wrap; width: 100%;">
                    <!-- Reduced To -->
                    <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                    display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                        <p style="margin: 0;">Reduced To</p>
                        <p style="width: 100%; text-align: left; font-size: 11px; color: black; margin-top: 0.3in;">
                            <span style="color: black; text-transform: capitalize;">KES
                                ....................................................................................</span>
                        </p>
                    </div>
                    <!-- Confirmed -->
                    <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                        <p style="margin: 0;">Confirmed</p>
                        <p style="width: 100%; text-align: left; font-size: 11px; color: black; margin-top: 0.3in;">
                            <span
                                style="color: black; text-transform: capitalize;">................................................................................................</span>
                        </p>
                    </div>
                    <!-- Increased To -->
                    <div style="padding: 0.02in; border: 1px solid black; font-size: 16px; text-align: left; padding-left: 0.1in; 
                                        display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                        <p style="margin: 0;">Increased To</p>
                        <p style="width: 100%; text-align: left; font-size: 11px; color: black; margin-top: 0.3in;">
                            <span style="color: black; text-transform: capitalize;">KES
                                ....................................................................................</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer -->
    <div
        style="width: 8.3in; position: relative; height: 11.7in; background-color: white; display: flex; flex-flow: column; padding: 0.2in;">

    </div>
</div>

<div id="editor"></div>
