@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center; font-family: Bernard MT Condensed;">Complaint Against other Offenders</h3>
            <div class="panel panel-primary">

                @if ($errors->has())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
            @endif

        @if(Session::has('submitmsg'))
            <div class='alert alert-success'>
            <strong>Success!</strong> {!! Session::get('submitmsg') !!}
            @foreach($results as $key=>$number)
            <p style="color:red;"> Your Complaint Number is:&nbsp;{{ $number->rand }}</p>
            <p style="color:blue;">Note this Complaint Number for further query.Thank You</p>
            @endforeach
            </div>
        @endif


                <div class="panel-body">
                <h4 style="color: #00acc1;">Enter Reporting Person Information:-</h4>
                    <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                    <p>Please enter your information as completely as possible. You may be contacted regarding this incident. An email address is required if you would like to be notified when this report is received and approved.</p>
                    </div>
                    <hr>
    <form method="POST" action="/offender_complaint" novalidate class="form-horizontal" role="form">

    		<div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name" >
                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter Your Address">
                    @if ($errors->has('address')) <p class="help-block">{{ $errors->first('address') }}</p> @endif
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Contact Number</label>
                <div class="col-sm-4">
                    <input type="text" id="phone" class="form-control" name="phone_number" placeholder="ex: +880171-0000000">
                    @if ($errors->has('phone_number')) <p class="help-block">{{ $errors->first('phone_number') }}</p> @endif
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" class="form-control" name="email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                </div>
            </div>

            	{{--reporting person information end--}}
                {{--police complaint start--}}
                <hr>
                <h4 style="color: #00acc1;">Enter Offender's Information:-</h4>
                
                <hr>

            <div class="form-group">
                <label for="offender_name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" id="offender_name" class="form-control" name="offender_name" placeholder="Enter Offender's name">
                                @if ($errors->has('offender_name')) <p class="help-block">{{ $errors->first('offender_name') }}</p> @endif
                 	</div>
            </div>

            <div class="form-group">
                <label for="age" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-10">
                    <input type="text" id="age" class="form-control" name="age" placeholder="Age">
                    @if ($errors->has('age')) <p class="help-block">{{ $errors->first('age') }}</p> @endif
                    </div>
            </div>

            <div class="form-group">
                            <label for="fathers_name" class="col-sm-2 control-label">Father's Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="fathers_name" class="form-control" name="fathers_name" placeholder="Enter Father's name">
                                @if ($errors->has('fathers_name')) <p class="help-block">{{ $errors->first('fathers_name') }}</p> @endif
                            </div>
                </div>

            <div class="form-group">
                            <label for="mothers_name" class="col-sm-2 control-label">Mother's Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="mothers_name" class="form-control" name="mothers_name" placeholder="Enter Mother's name">
                                @if ($errors->has('mothers_name')) <p class="help-block">{{ $errors->first('mothers_name') }}</p> @endif
                            </div>
                </div>

            <div class="form-group">
                            <label for="height" class="col-sm-2 control-label">Height</label>
                            <div class="col-sm-10">
                                <input type="text" id="height" class="form-control" name="height" placeholder="Enter Mother's name">
                                @if ($errors->has('height')) <p class="help-block">{{ $errors->first('height') }}</p> @endif
                            </div>
                </div>

                <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="gender" value="Male">Male</label>
                        <label><input type="radio" name="gender" value="Female">Female</label>
                        @if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
                    </div>
                </div>
            	</div>


            	<div class="form-group">
                            <label for="identification_mask" class="col-sm-2 control-label">Identification Mask</label>
                            <div class="col-sm-10">
                                <input type="text" id="identification_mask" class="form-control" name="identification_mask" placeholder="Enter Mother's name">
                                @if ($errors->has('identification_mask')) <p class="help-block">{{ $errors->first('identification_mask') }}</p> @endif
                            </div>
                </div>

                <div class="form-group">
                            <label for="present_address" class="col-sm-2 control-label">Present Address</label>
                            <div class="col-sm-10">
                                <input type="text" id="present_address" class="form-control" name="present_address" placeholder="Enter Present">
                                @if ($errors->has('present_address')) <p class="help-block">{{ $errors->first('present_address') }}</p> @endif
                            </div>
                </div>

                <div class="form-group">
                            <label for="permanent_address" class="col-sm-2 control-label">Permanent Address</label>
                            <div class="col-sm-10">
                                <input type="text" id="permanent_address" class="form-control" name="permanent_address" placeholder="Enter Permanent">
                                @if ($errors->has('permanent_address')) <p class="help-block">{{ $errors->first('permanent_address') }}</p> @endif
                            </div>
                </div>

                <div class="form-group">
                            <label for="criminal_activities" class="col-sm-2 control-label">Criminal Activities</label>
                            <div class="col-sm-10">
                                <textarea id="criminal_activities" class="form-control" name="criminal_activities" placeholder="Criminal Activities"></textarea>
                                @if ($errors->has('criminal_activities')) <p class="help-block">{{ $errors->first('criminal_activities') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="case_details" class="col-sm-2 control-label">Case Details(if any)</label>
                            <div class="col-sm-10">
                                <input type="text" id="case_details" class="form-control" name="case_details" placeholder="Enter Permanent">
                                @if ($errors->has('case_details')) <p class="help-block">{{ $errors->first('case_details') }}</p> @endif
                            </div>
                </div>

                <center><p style="color:red;">Please double check before submission<br>
                        Once you submitted you could not change</p></center>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="random_number" id="random-number" value="" />
            <br>


            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;" onclick="getElementById('random-number').value=Math.floor(Math.random()*10000)"></center>


            </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')