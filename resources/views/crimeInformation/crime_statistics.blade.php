@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">

     <div class="col-md-6 col-md-offset-3">
            <center><h3><b>Crime Statistics</b></h3></center>
            <hr>

            <table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr class="active">
                <th>Year</th>
                <th>Robbery</th>
                <th>Kidnapping</th>
                <th>Women/child Abuse</th>
                <th>Total Crime</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $key => $value)
                <tr class="success">
                    <td>{{ $value->year }}</td>
                    <td>{{ $value->robbery }}</td>
                    <td>{{ $value->kidnapping }}</td>
                    <td>{{ $value->women_childabuse }}</td>
                    <td>{{ $value->robbery + $value->kidnapping + $value->women_childabuse }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>

        </div>


	</div>
</div>
	<br>
		<br>
			<br>

@include('footer')