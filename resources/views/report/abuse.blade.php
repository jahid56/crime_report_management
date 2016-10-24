@include('header')
@section('title','home')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="border: 1px solid black">
            <p style="font-family: Century;">There are several different incident types that can be entered online.
                <i style="color: red;">If the incident you are reporting is an emergency, please call 999 instead of using this form.</i><br>
                Note: Filing a false Police Report is a crime.</p>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center; font-family: Bernard MT Condensed;">Women/Child Abuse FIR</h3>
            <div class="panel panel-primary">
                <div class="panel-body">

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
                        @foreach($results as $key => $number)
                        <p style="color:red;"> Your Complaint Number is:&nbsp;{{ $number->rand }}</p>
                        <p style="color:blue;">Note this Complaint Number for further query.Thank You</p>
                        @endforeach
                        </div>
                    @endif

                    <h4 style="color: #00acc1;">Enter Reporting Person Information:-</h4>
                    <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                        <p>Please enter your information as completely as possible. You may be contacted regarding this incident. An email address is required if you would like to be notified when this report is received and approved.</p>
                    </div>
                    <hr>


                    <form method="POST" action="/abuse" novalidate class="form-horizontal" role="form">

                        <div class="form-group">
                            <label for="first_name" class="col-sm-2 control-label">First Name:</label>
                            <div class="col-sm-10">
                                <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Enter Your First Name" >
                                @if ($errors->has('first_name')) <p class="help-block">{{ $errors->first('first_name') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="col-sm-2 control-label">Last Name:</label>
                            <div class="col-sm-10">
                                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                                @if ($errors->has('last_name')) <p class="help-block">{{ $errors->first('last_name') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Home Address:</label>
                            <div class="col-sm-10">
                                Street Address:<input type="text" id="address" class="form-control" name="street_address_home" placeholder="Enter Your Home Street Address">
                                @if ($errors->has('street_address_home')) <p class="help-block">{{ $errors->first('street_address_home') }}</p> @endif
                                <div class="col-sm-4">
                                    City:<input type="text" id="address" class="form-control" name="city" placeholder="Enter Your City">
                                    @if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
                                    Zip Code:<input type="text" id="address" class="form-control" name="zip_code" placeholder="Enter Your Zip Code">
                                    @if ($errors->has('zip_code')) <p class="help-block">{{ $errors->first('zip_code') }}</p> @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-sm-2 control-label">Contact Number:</label>
                            <div class="col-sm-4">
                                <input type="text" id="phone" class="form-control" name="phone_number" placeholder="ex: +880171-0000000">
                                @if ($errors->has('phone_number')) <p class="help-block">{{ $errors->first('phone_number') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" class="form-control" name="email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_email" class="col-sm-2 control-label">Confirm Email:</label>
                            <div class="col-sm-10">
                                <input type="email" id="confirm_email" class="form-control" name="confirm_email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-sm-2 control-label">Gender:</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="Male">Male</label>
                                    <label><input type="radio" name="gender" value="Female">Female</label>
                                    @if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-sm-2 control-label">Date of Birth:</label>
                            <div class="col-sm-2">
                                <select name="day" id="dob" class="form-control">
                                    <option value="">Day</option>
                                    <option value="">--------------</option>

                                    <?php
                                    for ($d=01; $d <= 31; $d++) {
                                        if(strlen($d) == 1){
                                            $d = "0$d";
                                        }
                                        echo "<option value=\"$d\">$d</option>";
                                    }
                                    ?>

                                </select>
                                @if ($errors->has('day')) <p class="help-block">{{ $errors->first('day') }}</p> @endif
                            </div>
                            <div class="col-sm-2">
                                <select name="month" id="dob" class="form-control">
                                    <option value="">Month</option>
                                    <option value="">---------------</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                @if ($errors->has('month')) <p class="help-block">{{ $errors->first('month') }}</p> @endif
                            </div>
                            <div class="col-sm-2">
                                <select name="year" id="dob" class="form-control">
                                    <option value="">Year</option>
                                    <option value="">---------------</option>

                                    <?php
                                    for ($y=2016; $y >= 1900; $y--) {
                                        echo "<option value=\"$y\">$y</option>";
                                    }
                                    ?>

                                </select>
                                @if ($errors->has('year')) <p class="help-block">{{ $errors->first('year') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="relation" class="col-sm-2 control-label">Relation with abused person:</label>
                            <div class="col-sm-10">
                                <input type="text" id="relation" class="form-control" name="relation" placeholder="Enter your relation with the abused person">
                                @if ($errors->has('relation')) <p class="help-block">{{ $errors->first('relation') }}</p> @endif
                            </div>
                        </div>

                        {{--reporting person information end--}}

                        {{--missing person information start--}}
                        <hr>
                        <h4 style="color: #00acc1;">Enter Abused Person Information:-</h4>

                        <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                            <p>Please enter all the information that applies. If you do not know the address of the incident, use the nearest intersection such as Market St./ 10th St.</p>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="ab_fname" class="col-sm-2 control-label">First Name:</label>
                            <div class="col-sm-10">
                                <input type="text" id="ab_fname" class="form-control" name="ab_fname" placeholder="Enter the abused person first name">
                                @if ($errors->has('ab_fname')) <p class="help-block">{{ $errors->first('ab_fname') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ab_lname" class="col-sm-2 control-label">Last Name:</label>
                            <div class="col-sm-4">
                                <input type="text" id="ab_lname" class="form-control" name="ab_lname" placeholder="Enter the abused person last name">
                                @if ($errors->has('ab_lname')) <p class="help-block">{{ $errors->first('ab_lname') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="age" class="col-sm-2 control-label">Age:</label>
                            <div class="col-sm-4">
                                <input type="text" id="age" class="form-control" name="age" placeholder="Enter missing person age">
                                @if ($errors->has('age')) <p class="help-block">{{ $errors->first('age') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="incident_date" class="col-sm-2 control-label">Incident date and time:</label>
                            <div class="col-sm-4">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="incident_date">
                                    @if ($errors->has('incident_date')) <p class="help-block">{{ $errors->first('incident_date') }}</p> @endif
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>


                        <div class="form-group">
                            <label for="incident_location" class="col-sm-2 control-label">Incident Location:</label>
                            <div class="col-sm-6">
                                <input type="text" id="incident_location" class="form-control" name="incident_location" placeholder="Enter incident location">
                                @if ($errors->has('incident_location')) <p class="help-block">{{ $errors->first('incident_location') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ab_address" class="col-sm-2 control-label">Permanent address:</label>
                            <div class="col-sm-6">
                                <input type="text" id="ab_address" class="form-control" name="ab_address" placeholder="Enter abused person permanent address">
                                @if ($errors->has('ab_address')) <p class="help-block">{{ $errors->first('ab_address') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ab_city" class="col-sm-2 control-label">City:</label>
                            <div class="col-sm-6">
                                <input type="text" id="ab_city" class="form-control" name="ab_city" placeholder="Enter abused person city">
                                @if ($errors->has('ab_city')) <p class="help-block">{{ $errors->first('ab_city') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="religion" class="col-sm-2 control-label">Religion:</label>
                            <div class="col-sm-6">
                                <input type="text" id="religion" class="form-control" name="religion">
                                @if ($errors->has('religion')) <p class="help-block">{{ $errors->first('religion') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="abused_by" class="col-sm-2 control-label">Abused By:</label>
                            <div class="col-sm-6">
                                <input type="text" id="abused_by" class="form-control" name="abused_by" >
                                @if ($errors->has('abused_by')) <p class="help-block">{{ $errors->first('abused_by') }}</p> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="reason" class="col-sm-2 control-label">Reason For Abuse:</label>
                            <div class="col-sm-6">
                                <textarea id="reason" class="form-control" name="reason" placeholder="Enter reason for abuse(min:20 and max:100 characters)"></textarea>
                                @if ($errors->has('reason')) <p class="help-block">{{ $errors->first('reason') }}</p> @endif
                            </div>
                        </div>

                        {{--missing person information end--}}

                        {{--narrative start--}}
                        <hr>
                        <h4 style="color: #00acc1;"> Enter Narrative:-</h4>

                        <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                            <p>Please enter a detailed description of the incident.<i style="color: red;"> Include in this description if you are NOT seeking criminal prosecution or if the intent of this report is solely for insurance purposes.</i>
                                <br>
                                (2000 characters max)
                            </p>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="narrative" class="col-sm-2 control-label">Narrative:</label>
                            <div class="col-sm-10">
                                <textarea id="narrative" class="form-control" name="narrative" placeholder="minimum 100 and maximum 2000 characters"></textarea>
                                @if ($errors->has('narrative')) <p class="help-block">{{ $errors->first('narrative') }}</p> @endif
                            </div>
                        </div>

                <center><p style="color:red;">Please double check before submission<br>
                        Once you submitted you could not change</p></center>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="random_number" id="random-number" value="" />

                        <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;" onclick="getElementById('random-number').value=Math.floor(Math.random()*10000)"></center>

                    </form>

                </div>
            </div>

            {{--robbery incident end--}}


        </div>
    </div>
</div>

@include('footer')