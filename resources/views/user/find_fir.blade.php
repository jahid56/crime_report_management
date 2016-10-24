@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <div class="col-md-8 col-md-offset-2" style="height:410px;">

    <center><h3><b>Select Your Submitted FIR or Complaint</b></h3></center>
    <br>

	<center><a href="/find_fir_robbery" class="btn btn-primary" style="padding:10px; width:250px;">Robbery FIR</a></center>
		<br>

	<center><a href="/find_fir_mp" class="btn btn-primary" style="padding:10px; width:250px;">Kidnapping FIR</a></center>
		<br>

	<center><a href="/find_fir_ab" class="btn btn-primary" style="padding:10px; width:250px;">Women/Child Abuse FIR</a></center>

			<br>

	<center><a href="/find_police_complaint" class="btn btn-primary" style="padding:10px; width:250px;">Complaint Against Police</a></center>

	<br>

	<center><a href="/find_offender_complaint" class="btn btn-primary" style="padding:10px; width:250px;">Complaint Against Other Offenders</a></center>

	</div>

	</div>
</div>


@include('footer')