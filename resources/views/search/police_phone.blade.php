@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
    <center><h3><b>Search phone numbers by District/Places</b></h3></center>
    <div class="col-md-6 col-md-offset-1" style="height:360px;">
    <br>
        <br>
            <br>
    <form method="POST" action="/police_phone" novalidate class="form-horizontal" role="form">

    <div class="form-group">
        <label for="area" class="col-sm-6 control-label" style="color:black;">Select District:</label>
            <div class="col-sm-6">
    <select name="division" class="form-control">
    @foreach($division as $key => $value)
    	<option value="{{$value->division}}">{{ $value->division }}</option>
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