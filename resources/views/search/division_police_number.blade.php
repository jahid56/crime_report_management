@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <br>
    <div class="col-md-6 col-md-offset-3" style="height:450px;">
    <center><h3><b>Important Police Phone Numbers</b></h3></center>
    <table class="table table-bordered">
    <tr>
    <th>District/Places</th>
    <th>Designation</th>
    <th>Department</th>
    <th>Mobile Numbers</th>
    </tr>
    @foreach($results as $key => $value)
    <tr>
    <td>{{ $value->division }}</td>
    <td>{{ $value->designation }}</td>
    <td>{{ $value->thana }}</td>
    <td>{{ $value->phone_number }}</td>
    </tr>
    @endforeach

    </table>
    </div>

   	</div>
</div>
	<br>
		<br>
			<br>

@include('footer')