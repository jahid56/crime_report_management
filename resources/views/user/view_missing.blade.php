@include('header')
@section('title','home')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" >
    <center><h3>Kidnapping FIR</h3></center>

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
    @if($datas == NULL)

 <div class="col-md-6 col-md-offset-2"> 
    <div class="alert alert-danger">
  	<strong>Not found!</strong> no record found in database.
	</div>
 </div>

    @else

@foreach($datas as $key => $value)
           <button onclick="PrintElem('#mydiv')" class="btn btn-danger" style="float:right;">Export to  PDF</button>
            <div id="mydiv">
            <div class='container-fluid' style='background-color:#D8D8D8;'>
            <div class='row'>
            <div class='col-sm-6 col-md-offset-4'>
            <br>
            <div class="table-responsive" id="content">
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
            <th><b>Relation with missing person</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->relation }}</b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Missing Person Information:-</b></h4>
            <tr>
            <th><b>First Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mis_fname }}</b></td>
            </tr>

            <tr>
            <th><b>Last Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mis_lname }}</b></td>
            </tr>

            <tr>
            <th><b>Gender</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mis_gender }}</b></td>
            </tr>

            <tr>
            <th><b>Age</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->age }}</b></td>
            </tr>

            <tr>
            <th><b>Missing From Date</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->missing_date }}</b></td>
            </tr>

            <tr>
            <th><b>Missing Location</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->missing_location }}</b></td>
            </tr>

            <tr>
            <th><b>Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_address }}</b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_city }}</b></td>
            </tr>

            <tr>
            <th><b>Phone</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_phone }}</b></td>
            </tr>

            <tr>
            <th><b>Occupation</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_occupation }}</b></td>
            </tr>

            <tr>
            <th><b>Height</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_height }}</b></td>
            </tr>

            <tr>
            <th><b>Remarks</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->mp_remarks }}</b></td>
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
            <tr>
            <th><b>Submission Date & Time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'>{{ $value->created_at }}</b></td>
            </tr>
            </table>
            </div>
            <br>
            	<br>

            <!-- <a class="btn btn-small btn-info" href="{{ URL::to('edit_robbery/' . $value->id ) }}" style="width:80px;">Edit</a> --> 
            <a class="btn btn-small btn-info" href="{{ URL::to('delete_missing/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a>

            <br>
            	<br>
            		<br>
            
            </div>
            </div>
            </div>
            </div>

        @endforeach

        @endif

                </div>
            </div>
        </div>


@include('footer')