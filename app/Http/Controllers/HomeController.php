<?php

namespace App\Http\Controllers;

use DB;
use View;
use App\Model\Robberies;
use App\Model\Criminals;
use App\Model\Statistics;
use App\Model\Policestation;
use App\Model\Missingpersons;
use App\Model\Abusedpersons;
use App\Model\Police;
use App\Model\Offender;
use App\Model\News;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        // $model = DB::table('users')->where('id', $id)->get();
        
        return view('home');
    }

    public function robberyView(){
        $model = robberies::get();
        return view('viewReport.robberyView')->with('datas',$model);
    }

    public function deleteRobbery($id){
        $model = Robberies::find($id);
        $model->delete();
        return Redirect::to('robberyView')->with('deletemsg','Data has been deleted successfully');
    }


    public function missing_personView(){
        $model = Missingpersons::get();
        return view('viewReport.missing_personView')->with('datas',$model);
    }

    public function deleteMissing($id){
        $model = Missingpersons::find($id);
        $model->delete();
        return Redirect::to('missing_personView')->with('deletemsg','Data has been deleted successfully');
    }


    public function abuseView(){
        $model = abusedpersons::get();
        return view('viewReport.abuseView')->with('datas',$model);
    }

    public function deleteAbuse($id){
        $model = Abusedpersons::find($id);
        $model->delete();
        return Redirect::to('abuseView')->with('deletemsg','Data has been deleted successfully');
    }

    public function policeComplaintView(){
        $model = Police::get();
        return view('viewReport.police_complaintView')->with('datas',$model);
    }

    public function deletePolice($id){
        $model = Police::find($id);
        $model->delete();
        return Redirect::to('police_complaintView')->with('deletemsg','Data has been deleted successfully');
    }

    public function OffenderView(){
        $model = Offender::get();
        return view('viewReport.offender_view')->with('datas',$model);
    }

    public function deleteOffender($id){
        $model = Offender::find($id);
        $model->delete();
        return Redirect::to('offender_view')->with('deletemsg','Data has been deleted successfully');
    }

    public function post_criminal(){
        
        return view('criminals.post');
    }

    public function store(Request  $data)
    {
        $rules = array(
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('post')->withErrors($validator);

        } else {

            $logo = $data->file('image');
            $upload = 'uploads/logo';
            $filename = $logo->getClientOriginalName();
            $success = $logo->move($upload, $filename);

            if($success) {

                $table = new Criminals;
                $table->title = $data->input('title');
                $table->image = $filename;
                $table->save();
                return Redirect::to('post')->with('submitmsg', 'Submitted Successfully!');
            }

        }
    }

    public  function display(){
        $model = Criminals::all();
        return view('criminals.post')->with('datas',$model);
    }

    public function editData($id){
        $edit = Criminals::find($id);
        return view('criminals.edit')->with('datas',$edit);
    }

    public function updateData(Request $data, $id ){

        $rules = array(
            'image' => 'required|mimes:jpg,jpeg',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('edit/'.$id)->withErrors($validator);

        } else {

            $logo = $data->file('image');
            $upload = 'uploads/logo';
            $filename = $logo->getClientOriginalName();
            $success = $logo->move($upload, $filename);

            if($success) {

                $table = new Criminals;
                $table = array(
                    'title' => $data->input('title'),
                    'image' => $filename,
                );
                Criminals::where('id', $id)->update($table);
                return Redirect::to('post')->with('updatemsg', 'Update Successfully!');
            }

        }

    }

    public function deleteData($id){
        $model = Criminals::find($id);
        $model->delete();
        return Redirect::to('post')->with('deletemsg','Data has been deleted successfully');
    }

    public function crimeStatistics(){
        return view('criminals.crimestatistics');
        // $model = Criminals::all();
        // return view('crimeinformation.mostWantedCriminals')->with('datas',$model);
    }

    public function store_statistics(Request  $data)
    {
        $rules = array(
            'year' => 'required',
            'robbery' => 'required',
            'kidnapping' => 'required',
            'women_childabuse' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('crimestatistics')->withErrors($validator);

        } else {

            $table = new Statistics;
            $table->year = $data->input('year');
            $table->robbery = $data->input('robbery');
            $table->kidnapping = $data->input('kidnapping');
            $table->women_childabuse = $data->input('women_childabuse');
            $table->save();
            return Redirect::to('crimestatistics')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function viewStatistics(){
        $model = Statistics::all();
        return view('criminals.crimestatistics')->with('datas',$model);
    }

    public function deleteStat($id){
        $model = Statistics::find($id);
        $model->delete();
        return Redirect::to('crimestatistics')->with('deletemsg','Data has been deleted successfully');
    }

    public function PoliceStation(){
        return view('user.police_station');
    }

    public function store_policestation(Request  $data)
    {
        $rules = array(
            'area' => 'required',
            'lon' => 'required',
            'lat' => 'required',
            'address' => 'required',
            'dutyofficer' => 'required',
            'dmp' => 'required',
            'tnt' => 'required',
            'cell' => 'required',
            'inspectorinvestigationcell' => 'required',
            'inchargedmp' => 'required',
            'inchargecell' => 'required',
            'inchargefax' => 'required',
            'inchargeemail' => 'required',
        );

        $validator = Validator::make($data->all(), $rules);

        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            return Redirect::to('police_station')->withErrors($validator);

        } else {

            $table = new Policestation;
            $table->area = $data->input('area');
            $table->lon = $data->input('lon');
            $table->lat = $data->input('lat');
            $table->address = $data->input('address');
            $table->dutyofficer = $data->input('dutyofficer');
            $table->dmp = $data->input('dmp');
            $table->tnt = $data->input('tnt');
            $table->cell = $data->input('cell');
            $table->inspectorinvestigationcell = $data->input('inspectorinvestigationcell');
            $table->inchargedmp = $data->input('inchargedmp');
            $table->inchargecell = $data->input('inchargecell');
            $table->inchargefax = $data->input('inchargefax');
            $table->inchargeemail = $data->input('inchargeemail');
            $table->save();
            return Redirect::to('police_station')->with('submitmsg','<b>Submitted Successfully!</b>');

        }
    }

    public function viewPolicestation(){
        $model = Policestation::all();
        return view('user.police_station')->with('datas',$model);
    }

    public function deleteStation($id){
        $model = Policestation::find($id);
        $model->delete();
        return Redirect::to('police_station')->with('deletemsg','Data has been deleted successfully');
    }


}
