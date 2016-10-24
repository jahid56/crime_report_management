@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" >
    <center><h3>Robbery FIR</h3></center>

        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'robbery fir', 'height=400,width=600');
        mywindow.document.write('<html><head><title>robbery fir</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>

        @foreach($datas as $key => $value)
            <hr>
            <div id="mydiv">
            <div class='container-fluid' style='background-color:#D8D8D8;'>
            <div class='row'>
            <div class='col-sm-6 col-md-offset-4' id="content{{ $value->id }}">
            <br>
            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Reporting Person Information:-</b></h4>
            <tr>
            <th><b>First Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->first_name }}</b></td>
            </tr>

            <tr>
            <th><b>Last Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->last_name }}</b></td>
            </tr>

            <tr>
            <th><b>Street Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->street_address_home }}</b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->city }}</b></td>
            </tr>

            <tr>
            <th><b>Zip Code</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->zip_code }}</b></td>
            </tr>

            <tr>
            <th><b>Contact Number</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->phone_number }}</b></td>
            </tr>

            <tr>
            <th><b>Email</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->email }}</b></td>
            </tr>

            <tr>
            <th><b>Gender</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->gender }}</b></td>
            </tr>

            <tr>
            <th><b>Date of birth</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->day }}/{{ $value->month }}/{{ $value->year }}</b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Incident Information:-</b></h4>
            <tr>
            <th><b>Street Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->street_address_incident }}</b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->city_incident }}</b></td>
            </tr>

            <tr>
            <th><b>Zip Code</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->zip_code_incident }}</b></td>
            </tr>

            <tr>
            <th><b>Incident time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->incident_start }}</b></td>
            </tr>

            <tr>
            <th><b>Incident time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->incident_end }}</b></td>
            </tr>

            <tr>
            <th><b>Witness</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->witness }}</b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Property Information:-</b></h4>
            <tr>
            <th><b>Property type</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->type }}</b></td>
            </tr>

            <tr>
            <th><b>Brand</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->brand }}</b></td>
            </tr>

            <tr>
            <th><b>Model</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->model }}</b></td>
            </tr>

            <tr>
            <th><b>Color</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->color }}</b></td>
            </tr>

            <tr>
            <th><b>Serial Number</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->serial_no }}</b></td>
            </tr>

            <tr>
            <th><b>How many</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->how_many }}</b></td>
            </tr>

            <tr>
            <th><b>Property description</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->description }}</b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Detail About Robbery:-</b></h4>
            <tr>
            <th><b>Narrative</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->narrative }}</b></td>
            </tr>
            </table>
            </div>
            <br>
            <a class="btn btn-small btn-info" href="{{ URL::to('delete_robbery/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a>
            </div>
            <button onclick="PrintElem('#content{{ $value->id }}')" class="btn btn-danger">Export to  PDF</button>
            </div>
            <br>
            </div>
            </div>
        @endforeach
                
                </div>
            </div>
        </div>
@endsection
