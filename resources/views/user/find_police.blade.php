@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <center><h3><b>Find Police Stations by Area</b></h3></center>
    <div class="col-md-6 col-md-offset-1" style="height:360px;">
    <br>
        <br>
            <br>
    <form method="POST" action="/find_police" novalidate class="form-horizontal" role="form">

    <div class="form-group">
        <label for="area" class="col-sm-6 control-label" style="color:black;">Select Area:</label>
            <div class="col-sm-6">
    <select name="area" class="form-control">
    @foreach($area as $key => $value)
    	<option value="{{$value->area}}">{{ $value->area }}</option>
    @endforeach
    </select>
        <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="Search" class="btn btn-primary">
    		</div>
    </div>
    
    </form>	


    </div>
	</div>
</div>
	<br>
		<br>
			<br>

@include('footer')