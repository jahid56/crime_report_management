@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
    <center><h3><b>Edit criminal record</b></h3></center>
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

        {{--<!-- FORM STARTS HERE -->--}}
        {!! Form::open(array('url' => ['update',$datas->id], 'files' => true )) !!}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control" name="title" value="{{ $datas->title }}" placeholder="Title">
        </div>


        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" id="image" class="form-control" name="image"><br/>
            <img src="<?= url('uploads/logo') ?>/<?= $datas->image ?>" width="100px" alt="image">
            @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-primary">Update</button>

        {!! Form::close() !!}

    	</div>
    </div>
</div>


@endsection