@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
    <center><h3><b>Submit Crime Statistics</b></h3></center>
    <hr>

    	@if ($errors->has())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        @if(Session::has('submitmsg'))
        <div class='alert alert-success'>
            <strong><span style="color:green">{!! Session::get('submitmsg') !!}</span></strong>
        </div>
        @endif

        @if(Session::has('deletemsg'))
        <div class='alert alert-success'>
            <strong><span style="color:green">{!! Session::get('deletemsg') !!}</span></strong>
        </div>
        @endif

    {!! Form::open(array('url' => 'crime_submit' )) !!}

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" id="year" class="form-control" name="year" placeholder="year">
                @if ($errors->has('year')) <p class="help-block">{{ $errors->first('year') }}</p> @endif
            </div>

            <div class="form-group">
                <label for="robbery">Robbery</label>
                <input type="text" id="robbery" class="form-control" name="robbery" placeholder="robbery">
                @if ($errors->has('robbery')) <p class="help-block">{{ $errors->first('robbery') }}</p> @endif
            </div>

            <div class="form-group">
                <label for="kidnapping">kidnapping</label>
                <input type="text" id="kidnapping" class="form-control" name="kidnapping" placeholder="kidnapping">
                @if ($errors->has('kidnapping')) <p class="help-block">{{ $errors->first('kidnapping') }}</p> @endif
            </div>

            <div class="form-group">
                <label for="women_childabuse">women_childabuse</label>
                <input type="text" id="women_childabuse" class="form-control" name="women_childabuse" placeholder="women_childabuse">
                @if ($errors->has('women_childabuse')) <p class="help-block">{{ $errors->first('women_childabuse') }}</p> @endif
            </div>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <button type="submit" class="btn btn-primary">Submit</button>

        {!! Form::close() !!}

        	<br>
    			<br>
    				<br>
    	</div>

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
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $key => $value)
                <tr>
                    <td>{{ $value->year }}</td>
                    <td>{{ $value->robbery }}</td>
                    <td>{{ $value->kidnapping }}</td>
                    <td>{{ $value->women_childabuse }}</td>
                    <td>{{ $value->robbery + $value->kidnapping + $value->women_childabuse }}</td> 
                    <td><a class="btn btn-small btn-info" href="{{ URL::to('delete_stat/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")'>Delete</a></td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>

        </div>

    </div>
</div>


@endsection