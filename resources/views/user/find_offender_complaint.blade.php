@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <div class="col-md-8 col-md-offset-2" style="height:410px;">
    <br>
    	<br>
    <center><h3><b>Find Your Submited FIR by FIR Number</b></h3></center>
    <br>
    <center><p style="color:red;">FIR number is given during FIR submission</p></center>
    <br>
    <form method="POST" action="/find_offenderComplaint" novalidate class="form-horizontal" role="form">
    <div class="form-group">
        <label for="area" class="col-sm-2 col-sm-offset-3 control-label"><b>FIR Number:</b></label>
        <div class="col-sm-4">
    	<input type="text" name="fir_number" class="form-control" placeholder="FIR Number">
    	</div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <center><input type="submit" name="submit" value="Search" class="btn btn-primary" style="padding:10px; width:100px;"></center>
	</form>



	</div>
	</div>
</div>


@include('footer')