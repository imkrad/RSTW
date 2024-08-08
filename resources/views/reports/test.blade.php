<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        /* Styles for the footer */
        @page {
           
        }

        html * {
            font-family:Arial, Helvetica, sans-serif;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9px;
        }

        .content {
            margin-bottom:55px; /* Space for the footer */
        }

        .results table,
        .results td,
        .results th {
            border: .5px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 3px;
            vertical-align: top;
        }
        
        .results td {
            padding: 3px;
            /* vertical-align: top; */
            /* text-align: center; */
        }
        .footer {
            position: fixed;
            bottom: -10;
            width: 100%;
            left: 0;
            margin-left: auto;
            margin-right: auto;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<?php 
    $configuration = json_encode($configuration); 
    $configuration = json_decode($configuration, true);   
?>
<body>
    
    <div class="footer">
        <table style="border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="width: 40%; text-align: left; font-weight: bold; color: black;"><hr/></td>
            </tr>
        </table>
        <table style="margin-top: -3px; border-bottom-style: hidden; border-right-style: hidden; border-top-style: hidden; border-left-style: hidden;">
            <tr>
                <td style="border-right-style: hidden; width: 3%; text-align: right;"> <img src="<?php echo $qrCodeImage; ?>"  width="30" height="30" alt="QR Code"></td>
                <td style="border-right-style: hidden;" style="width: 50%; text-align: left; font-size: 10px;"><br/> <span style="font-weight: bold; color: #072388; margin-left: 5px;">{{$code}}</span></td>
                <td style="border-left-style: hidden; width: 50%; text-align: right; font-size: 10px;">OP-029-F5 (front page) <br/>Rev 8 l Jan, 03, 2023</td>
                
            </tr>
        </table>
    </div>

    <div class="content">
        <div style="font-family:Arial;">
            <img src="{{ public_path('images/logo-sm.png') }}" alt="tag" style="position: absolute; top: -4; left: 0; width: 60px; height: 60px;">
            <center style="font-size: 9px; margin-bottom: 0px;">Republic of the Philippines</center>
            <center style="font-size: 10px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold;">{{$configuration['name']}}</center>
            <center style="font-size: 11px; margin-bottom: 0px; font-weight: bold; color: #4290f5;">REGIONAL STANDARDS AND TESTING LABORATORIES</center>
            <center style="font-size: 9px;">Pettit Baracks, Zamboanga City | (062) 991-1024</center>
            <hr style="color: #4290f5; margin-top: 15px;"/>
            <br/>
            <center style="font-size: 13px; color:#000; font-weight: bold; padding: 2px; margin-top: -10px;">TEST REPORT</center>
        </div>
        
        <table style="border: none; font-size: 11px; margin-top: 5px; text-align: left;">
            <tbody>
                <tr style="border: none;">
                    <td width="25%">TSR Number</td>
                    <td width="2%">:</td>
                    <td>{{$sample->tsr->code}}</td>
                </tr>
                <tr style="border: none;">
                    <td>Date Submitted</td>
                    <td>:</td>
                    <td>{{$sample->tsr->created_at}}</td>
                </tr>
                <tr>
                    <td>Date Analyzed</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sample Submitted</td>
                    <td>:</td>
                    <td>{{$sample->name}}</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Sample Descriptions</td>
                    <td style="vertical-align: top;">:</td>
                    <td style="vertical-align: top;"><em>{{$sample->customer_description}}, {{$sample->description}}</em></td>
                </tr>
                <tr>
                    <td>Submitted by</td>
                    <td>:</td>
                    <td style="text-transform: uppercase; font-weight: bold;"><em>{{($sample->tsr->customer->is_main) ? $sample->tsr->customer->customer_name->name : $sample->tsr->customer->customer_name->name.' - '.$sample->tsr->customer->name}}</em></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>{{$sample->tsr->customer->address->address}}, {{$sample->tsr->customer->address->barangay->name}}, {{$sample->tsr->customer->address->municipality->name}}, , {{$sample->tsr->customer->address->province->name}}</td>
                    <!-- , {{$sample->tsr->customer->address->region->region}} -->
                </tr>
            </tbody>
        </table>
        <h6 style="font-size: 11px; margin-top: 12px;">CHEMICAL / MECHANICAL TEST RESULT(S):</h6>
        <table style="border: 1px solid black; margin-top: -22px;" class="results">
            <thead style="background-color:#edf1f5; padding: 5px; font-size: 11px;">
                <tr>    
                    <th width="30%">PARAMETER</th>
                    <th width="20%">RESULT</th>
                    <th width="50%">METHOD</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sample['analyses'] as $index=>$analysis)
                <tr style="font-size: 11px; text-align:center;">
                    <td>{{$edited[$index]->name}}</td>
                    <td><b>{{$edited[$index]->result}}</b></td>
                    <td>{{$analysis['testservice']['method']['method']['name']}} @if($analysis['testservice']['method']['method']['short']) <br/> {{$analysis['testservice']['method']['method']['short']}} @endif</td>
                </tr>
                @endforeach
                <tr>
                    <td style="font-size: 9px;" colspan="3"><center>***** NOTHING FOLLOWS *****</center></td>
                </tr>
            </tbody>
        </table>
        <h6 style="font-size: 11px; margin-top: 20px;">REMARKS:</h6>
        <ul style="font-size: 10px; margin-top: -20px; margin-left: -15px;"> 
            <li>This report is based on the samples received by this office and should not be used for advertising purposes or sales promotion nor as a basis for tariff or customs classification of imported commodity.</li>
            <li>Information in italics is provided by the customer.</li>
            <li>This report is not valid without dry seal and QR code.</li>
            <li>This report shall not be reproduced except in full, without the written approval of the laboratory.</li>
        </ul>
        <h6 style="font-size: 11px; margin-top: 20px;">SIGNATORIES:</h6>
        <table style="text-align: center; margin-top: -20px; border: 1px solid black; font-size: 10px; page-break-inside: avoid;">
            <tbody>
                <tr>
                    <td style="min-height: 50px; padding: 20px; border: .5px solid black; border-bottom-style: hidden;"></td>
                    <td style="min-height: 50px; padding: 20px; border: .5px solid black; border-bottom-style: hidden;"></td>
                    <td style="min-height: 50px; padding: 20px; border: .5px solid black; border-bottom-style: hidden;"></td>
                </tr>
                <tr>
                    <td width="33.3%" style="padding: 3px; border: .5px solid black;"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">Testing Only</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Customer / Authorized Representative </br> <span style="font-size:9px; color: #606060;">(Approved Signatory)</span></td>
                    <td width="33.3%" style="padding: 3px; border: .5px solid black;"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">Testing Only</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Customer Relation Officer </br> <span style="font-size:9px; color: #606060;">(Approved Signatory)</span></td>
                    <td width="33.3%" style="padding: 3px; border: .5px solid black;"><span style="font-weight: bold; font-size: 11px; color: #072388; text-transform: uppercase;">Testing Only</span><hr style="margin-top: 0px; margin-bottom: 1px; border: .1px solid black; width: 80%;">Technical Manager </br> <span style="font-size:9px; color: #606060;">(Laboratory Head)</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>