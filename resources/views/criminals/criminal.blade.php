@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
    <center><h3><b>Post a new criminal record</b></h3></center>
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

    {!! Form::open(array('url' => '/criminal', 'files' => true )) !!}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
            </div>


            <div class="form-group">
                <label for="file">Select Image</label>
                <input type="file" id="image" class="form-control" name="image">
                @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
            </div>
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

            <button type="submit" class="btn btn-primary">Upload</button>

        {!! Form::close() !!}

        	<br>
    			<br>
    				<br>
    	</div>

    	<div class="col-md-6 col-md-offset-3">
    		<center><h3><b>All Criminals</b></h3></center>
    		<hr>

    		<table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datas as $key => $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    <td><img src="<?= url('uploads/logo') ?>/<?= $value->image ?>" width="150px" height="150px;" alt="image"></td>
                    <td><a class="btn btn-small btn-info" href="{{ URL::to('edit/' . $value->id ) }}">Edit</a> 
                    <a class="btn btn-small btn-info" href="{{ URL::to('delete/' . $value->id) }}" onclick='return confirm("Are you sure you want to delete this record?")'>Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    	</div>
    </div>
</div>


@endsection