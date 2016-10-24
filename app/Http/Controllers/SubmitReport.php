<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Model\Robberies;
use App\Model\Missingpersons;
use App\Model\Abusedpersons;
use App\Model\Police;
use App\Model\Offender;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Paginator;

class SubmitReport extends Controller
{
    public function home(){
    return view('welcome');
    }

    public function getRobbery()
    {
        return view('report.robbery');
    }

    public function store_robbery(Request  $data)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address_home' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'street_address_incident' => 'required',
            'city_incident' => 'required',
            'zip_code_incident' => 'required',
            'incident_start' => 'required',
            'incident_end' => 'required',
            'witness' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'how_many' => 'required',
            'description' => 'required',
            'narrative' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('robbery')->withErrors($validator);

        } else {

            $rand = str_random(4);

            $table = new Robberies;
            $table->first_name = $data->input('first_name');
            $table->last_name = $data->input('last_name');
            $table->street_address_home = $data->input('street_address_home');
            $table->city = $data->input('city');
            $table->zip_code = $data->input('zip_code');
            $table->phone_number = $data->input('phone_number');
            $table->email = $data->input('email');
            $table->gender = $data->input('gender');
            $table->day = $data->input('day');
            $table->month = $data->input('month');
            $table->year = $data->input('year');
            $table->street_address_incident = $data->input('street_address_incident');
            $table->city_incident = $data->input('city_incident');
            $table->zip_code_incident = $data->input('zip_code_incident');
            $table->incident_start = $data->input('incident_start');
            $table->incident_end = $data->input('incident_end');
            $table->witness = $data->input('witness');
            $table->type = $data->input('type');
            $table->brand = $data->input('brand');
            $table->model = $data->input('model');
            $table->color = $data->input('color');
            $table->serial_no = $data->input('serial_no');
            $table->how_many = $data->input('how_many');
            $table->description = $data->input('description');
            $table->narrative = $data->input('narrative');
            $table->rand = $data->input('random_number');
            $table->save();
            return Redirect::to('robbery')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function Show_numberRobbery(Request $request){
        $users = DB::table('robberies')->get();
        foreach ($users as $key => $value) {
            $val =  $value->first_name;

        $results = DB::select( DB::raw("SELECT rand FROM robberies WHERE first_name='$val'") );
        }
        return view('report.robbery')->with(compact('results'));
    }

    public function FindbyRand_robbery(Request $request){
        $someVariable = $request->input('fir_number');

        $results = DB::select( DB::raw("SELECT * FROM robberies WHERE rand = '$someVariable'") );

        return view('user.view_robbery')->with('datas', $results);
    }


    public function deleteRobbery($id){
        $model = Robberies::find($id);
        $model->delete();
        return Redirect::to('robbery')->with('deletemsg','Data has been deleted successfully');
    }

    public function missing_person(){
        return view('report.missing_person');
    }

    public function store_missing_person(Request  $data)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address_home' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'relation' => 'required',
            'mis_fname' => 'required',
            'mis_lname' => 'required',
            'mis_gender' => 'required',
            'age' => 'required',
            'missing_date' => 'required',
            'missing_location' => 'required',
            'mp_address' => 'required',
            'mp_city' => 'required',
            'mp_phone' => 'required',
            'mp_occupation' => 'required',
            'mp_height' => 'required',
            'mp_remarks' => 'required',
            'narrative' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('missing_person')->withErrors($validator);

        } else {

            $rand = str_random(4);

            $table = new Missingpersons;
            $table->first_name = $data->input('first_name');
            $table->last_name = $data->input('last_name');
            $table->street_address_home = $data->input('street_address_home');
            $table->city = $data->input('city');
            $table->zip_code = $data->input('zip_code');
            $table->phone_number = $data->input('phone_number');
            $table->email = $data->input('email');
            $table->gender = $data->input('gender');
            $table->day = $data->input('day');
            $table->month = $data->input('month');
            $table->year = $data->input('year');
            $table->relation = $data->input('relation');
            $table->mis_fname = $data->input('mis_fname');
            $table->mis_lname = $data->input('mis_lname');
            $table->mis_gender = $data->input('mis_gender');
            $table->age = $data->input('age');
            $table->missing_date = $data->input('missing_date');
            $table->missing_location = $data->input('missing_location');
            $table->mp_address = $data->input('mp_address');
            $table->mp_city = $data->input('mp_city');
            $table->mp_phone = $data->input('mp_phone');
            $table->mp_occupation = $data->input('mp_occupation');
            $table->mp_height = $data->input('mp_height');
            $table->mp_remarks = $data->input('mp_remarks');
            $table->narrative = $data->input('narrative');
            $table->rand = $data->input('random_number');
            $table->save();
            return Redirect::to('missing_person')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function Show_numberMissing(Request $request){
        $users = DB::table('missingpersons')->get();
        foreach ($users as $key => $value) {
            $val =  $value->first_name;

        $results = DB::select( DB::raw("SELECT rand FROM missingpersons WHERE first_name='$val'") );
        }
        return view('report.missing_person')->with(compact('results'));
    }

    public function FindbyRand_mp(Request $request){
        $someVariable = $request->input('fir_number');

        $results = DB::select( DB::raw("SELECT * FROM missingpersons WHERE rand = '$someVariable'") );

        return view('user.view_missing')->with('datas', $results);
    }

    public function deleteKidnapping($id){
        $model = Missingpersons::find($id);
        $model->delete();
        return Redirect::to('missing_person')->with('deletemsg','Data has been deleted successfully');
    }

    public function abuse()
    {
        return view('report.abuse');
    }

    public function store_aboused_person(Request  $data)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address_home' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
            'relation' => 'required',
            'ab_fname' => 'required',
            'ab_lname' => 'required',
            'age' => 'required',
            'incident_date' => 'required',
            'incident_location' => 'required',
            'ab_address' => 'required',
            'ab_city' => 'required',
            'religion' => 'required',
            'abused_by' => 'required',
            'reason' => 'required',
            'narrative' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('abuse')->withErrors($validator);

        } else {

            $rand = str_random(4);

            $table = new Abusedpersons;
            $table->first_name = $data->input('first_name');
            $table->last_name = $data->input('last_name');
            $table->street_address_home = $data->input('street_address_home');
            $table->city = $data->input('city');
            $table->zip_code = $data->input('zip_code');
            $table->phone_number = $data->input('phone_number');
            $table->email = $data->input('email');
            $table->gender = $data->input('gender');
            $table->day = $data->input('day');
            $table->month = $data->input('month');
            $table->year = $data->input('year');
            $table->relation = $data->input('relation');
            $table->ab_fname = $data->input('ab_fname');
            $table->ab_lname = $data->input('ab_lname');
            $table->age = $data->input('age');
            $table->incident_date = $data->input('incident_date');
            $table->incident_location = $data->input('incident_location');
            $table->ab_address = $data->input('ab_address');
            $table->ab_city = $data->input('ab_city');
            $table->religion = $data->input('religion');
            $table->abused_by = $data->input('abused_by');
            $table->reason = $data->input('reason');
            $table->narrative = $data->input('narrative');
            $table->rand = $data->input('random_number');
            $table->save();
            return Redirect::to('abuse')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function Show_numberAbused(Request $request){
        $users = DB::table('abusedpersons')->get();
        foreach ($users as $key => $value) {
            $val =  $value->first_name;

        $results = DB::select( DB::raw("SELECT rand FROM abusedpersons WHERE first_name='$val'") );
        }
        return view('report.abuse')->with(compact('results'));
    }

    public function FindbyRand_ab(Request $request){
        $someVariable = $request->input('fir_number');

        $results = DB::select( DB::raw("SELECT * FROM abusedpersons WHERE rand = '$someVariable'") );

        return view('user.view_abuse')->with('datas', $results);
    }

    public function deleteAbuse($id){
        $model = Abusedpersons::find($id);
        $model->delete();
        return Redirect::to('abuse')->with('deletemsg','Data has been deleted successfully');
    }

    public function getComplaint()
    {
        return view('complaint.police_complaint');
    }


    public function store_police_complaint(Request  $data)
    {
        $rules = array(
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'police_name' => 'required',
            'rank' => 'required',
            'place_of_position' => 'required',
            'complaint' => 'required| min:6|max:2000',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('police_complaint')->withErrors($validator);

        } else {

            $rand = str_random(4);

            $table = new Police;
            $table->name = $data->input('name');
            $table->address = $data->input('address');
            $table->phone_number = $data->input('phone_number');
            $table->email = $data->input('email');
            $table->police_name = $data->input('police_name');
            $table->rank = $data->input('rank');
            $table->place_of_position = $data->input('place_of_position');
            $table->complaint = $data->input('complaint');
            $table->rand = $data->input('random_number');
            $table->save();
            return Redirect::to('police_complaint')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

     public function FindbyRand_police(Request $request){
        $someVariable = $request->input('fir_number');

        $results = DB::select( DB::raw("SELECT * FROM police WHERE rand = '$someVariable'") );

        return view('user.view_police_complaint')->with('datas', $results);
    }

    public function showNumber_police(Request $request){
        $users = DB::table('police')->get();
        foreach ($users as $key => $value) {
            $val =  $value->name;

        $results = DB::select( DB::raw("SELECT rand FROM police WHERE name='$val'") );
        }
        return view('complaint.police_complaint')->with(compact('results'));
    }

    public function deletePolice($id){
        $model = Police::find($id);
        $model->delete();
        return Redirect::to('police_complaint')->with('deletemsg','Data has been deleted successfully');
    }

    public function getOffender()
    {
        return view('complaint.offender_complaint');
    }

    public function store_offender_complaint(Request  $data)
    {
        $rules = array(
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'offender_name' => 'required',
            'age' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'height' => 'required',
            'gender' => 'required',
            'identification_mask' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'criminal_activities' => 'required',
            'case_details' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('offender')->withErrors($validator);

        } else {
            $rand = str_random(4);

            $table = new Offender;
            $table->name = $data->input('name');
            $table->address = $data->input('address');
            $table->phone_number = $data->input('phone_number');
            $table->email = $data->input('email');
            $table->offender_name = $data->input('offender_name');
            $table->age = $data->input('age');
            $table->fathers_name = $data->input('fathers_name');
            $table->mothers_name = $data->input('mothers_name');
            $table->height = $data->input('height');
            $table->gender = $data->input('gender');
            $table->identification_mask = $data->input('identification_mask');
            $table->present_address = $data->input('present_address');
            $table->permanent_address = $data->input('permanent_address');
            $table->criminal_activities = $data->input('criminal_activities');
            $table->case_details = $data->input('case_details');
            $table->rand = $data->input('random_number');
            $table->save();
            return Redirect::to('offender_complaint')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function Show_numberOffender(Request $request){
        $users = DB::table('offenders')->get();
        foreach ($users as $key => $value) {
            $val =  $value->name;

        $results = DB::select( DB::raw("SELECT rand FROM offenders WHERE name='$val'") );
        }
        return view('complaint.offender_complaint')->with(compact('results'));
    }



    public function FindbyRand_offender(Request $request){
        $someVariable = $request->input('fir_number');

        $results = DB::select( DB::raw("SELECT * FROM offenders WHERE rand = '$someVariable'") );

        return view('user.view_offender_complaint')->with('datas', $results);
    }

    public function deleteOffender($id){
        $model = Offender::find($id);
        $model->delete();
        return Redirect::to('offender_complaint')->with('deletemsg','Data has been deleted successfully');
    }

    public function getContact(){
        return view('contact');
    }

}
