@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <center><h3><b>Insert a new Police phone number</b></h3></center>
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
                
            <!-- {!! Form::open(array('url' => ['insert_police'])) !!} -->
    <form method="POST" action="/phone_number" novalidate class="form-horizontal" role="form">

            <div class="form-group">
                <label for="division" class="col-sm-2 control-label"><b>Division:</b></label>
                <div class="col-sm-10">
                <input type="text" id="division" class="form-control" name="division" placeholder="Division">
                @if ($errors->has('division')) <p class="help-block">{{ $errors->first('division') }}</p> @endif
                </div>
            </div>
            <div class="form-group">
                <label for="designation" class="col-sm-2 control-label"><b>Designation:</b></label>
                <div class="col-sm-10">
                <input type="text" id="designation" class="form-control" name="designation" placeholder="Designation">
                @if ($errors->has('designation')) <p class="help-block">{{ $errors->first('designation') }}</p> @endif
                </div>
            </div>
            <div class="form-group">
                <label for="thana" class="col-sm-2 control-label"><b>Thana:</b></label>
                <div class="col-sm-10">
                <input type="text" id="thana" class="form-control" name="thana" placeholder="Thana">
                @if ($errors->has('thana')) <p class="help-block">{{ $errors->first('thana') }}</p> @endif
                </div>
            </div>

            <div class="form-group">
                <label for="phone_number" class="col-sm-2 control-label"><b>Phone Number:</b></label>
                <div class="col-sm-10">
                <input type="text" id="phone_number" class="form-control" name="phone_number" placeholder="Phone Number">
                @if ($errors->has('phone_number')) <p class="help-block">{{ $errors->first('phone_number') }}</p> @endif
                </div>
            </div>

            

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>

            <br>
                <br>
        <!-- {!! Form::close() !!} -->
        </form>
        </div>
            

            
    </div>
</div>
@endsection
