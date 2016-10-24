@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" >
    <center><h3>Abusing FIR</h3></center>

        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'Abusing FIR', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Abusing FIR</title>');
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

            <tr>
            <th><b>Date of birth</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->relation }}</b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Abused Person Information:-</b></h4>
            <tr>
            <th><b>First Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->ab_fname }}</b></td>
            </tr>

            <tr>
            <th><b>Last Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->ab_lname }}</b></td>
            </tr>

            <tr>
            <th><b>Age</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->age }}</b></td>
            </tr>

            <tr>
            <th><b>Incident Date</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->incident_date }}</b></td>
            </tr>

            <tr>
            <th><b>Incident Location</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->incident_location }}</b></td>
            </tr>

            <tr>
            <th><b>Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->ab_address }}</b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->ab_city }}</b></td>
            </tr>

            <tr>
            <th><b>Religion</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->religion }}</b></td>
            </tr>

            <tr>
            <th><b>Abused By</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->abused_by }}</b></td>
            </tr>

            <tr>
            <th><b>Reason</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->reason }}</b></td>
            </tr>

            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Details about Abusing:-</b></h4>

            <tr>
            <th><b>Narrative</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->narrative }}</b></td>
            </tr>
            </table>
            </div>
            <br>
<a class="btn btn-small btn-info" href="{{ URL::to('delete_abuse/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a>
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