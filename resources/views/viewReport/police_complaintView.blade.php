@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12" >
    <center><h3>Complaint against Police</h3></center>

        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'Complaint Against Police', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Complaint Against Police</title>');
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
            <div class='container-fluid' style='background-color:#D8D8D8;'>
            <div class='row'>
            <div class='col-sm-6 col-md-offset-4' id="content{{ $value->id }}">
            <br>
            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Reporting Person Information:-</b></h4>
            <tr>
            <th><b>Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->name }}</b></td>
            </tr>

            <tr>
            <th><b>Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->address }}</b></td>
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

            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Police Information:-</b></h4>
            <tr>
            <th><b>Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->police_name }}</b></td>
            </tr>

            <tr>
            <th><b>Rank</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->rank }}</b></td>
            </tr>

            <tr>
            <th><b>Place of Position</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->place_of_position }}</b></td>
            </tr>

            <tr>
            <th><b>Complaint</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->complaint }}</b></td>
            </tr>

            <tr>
            <th><b>Complaint Number</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->rand }}</b></td>
            </tr>

            </table>
            </div>
            <br>
            <a class="btn btn-small btn-info" href="{{ URL::to('delete_police/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a>

            </div>

    <button onclick="PrintElem('#content{{ $value->id }}')" style="float:right;" class="btn btn-danger">Export to  PDF</button>
            </div>
            <br>
            </div>


            
            <br>
        @endforeach
                
                </div>
            </div>
        </div>
@endsection
