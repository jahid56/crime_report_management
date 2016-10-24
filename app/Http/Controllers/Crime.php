<?php

namespace App\Http\Controllers;

use DB;
use App\Model\Criminals;
use App\Model\Statistics;
use App\Model\Robberies;
use App\Model\Policestation;
use App\Model\Policenumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

class Crime extends Controller
{
    public function mostWantedCriminals(){
        $model = Criminals::all();
        return view('crimeinformation.mostWantedCriminals')->with('datas',$model);
    }

    public function crimeStat(){
        $model = Statistics::all();
        return view('crimeinformation.crime_statistics')->with('datas',$model);
    }

    public function getArea()
    {
        //$area = Policestation::all();
        //$area = DB::table('Policestation')->distinct()->get(['area']);
        $area = Policestation::distinct()->get(['area']);
        return view('user.find_police')->with(compact('area'));
    }

    public function FindPolice(Request $request){
        $someVariable = $request->input('area');

        $results = DB::select( DB::raw("SELECT * FROM policestations WHERE area = '$someVariable'") );

        return view('user.view_police_station')->with(compact('results'));
    }

    public function FindFIR()
    {
        return view('user.find_fir');
    }

    public function FindFIR_robbery()
    {
        return view('user.find_firRobbery');
    }

    public function FindFIR_mp()
    {
        return view('user.find_firMissing');
    }

    public function FindFIR_ab()
    {
        return view('user.find_firAbuse');
    }

    public function FindPolice_complaint()
    {
        return view('user.find_police_complaint');
    }

    public function FindOffender_complaint()
    {
        return view('user.find_offender_complaint');
    }

    public function Getdivision(){
        $division = Policenumber::distinct()->get(['division']);
        return view('search.police_phone')->with(compact('division'));
    }

    public function ViewPoliceNumber(Request $request){
        $someVariable = $request->input('division');

        $results = DB::select( DB::raw("SELECT * FROM policenumbers WHERE division = '$someVariable'") );

        return view('search.division_police_number')->with(compact('results'));
    }

    public function getNumber(){
        return view('user.phone');
    }

    public function store_phone(Request  $data)
    {
        $rules = array(
            'division' => 'required',
            'designation' => 'required',
            'thana' => 'required',
            'phone_number' => 'required',
            
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('phone')->withErrors($validator);

        } else {

            

            $table = new Policenumber;
            $table->division = $data->input('division');
            $table->designation = $data->input('designation');
            $table->thana = $data->input('thana');
            $table->phone_number = $data->input('phone_number');
            
            $table->save();
            return Redirect::to('phone')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

     public function viewPhone(){
        $model = Policenumber::all();
        return view('user.phone')->with(compact('model'));
    }


}
