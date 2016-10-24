<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
    return view('welcome');
});
    Route::get('/','SubmitReport@home');

    Route::get('robbery','SubmitReport@getRobbery');
    Route::post('robbery','SubmitReport@store_robbery');
    Route::get('robbery','SubmitReport@Show_numberRobbery');

    Route::get('missing_person','SubmitReport@missing_person');
    Route::post('missing_person','SubmitReport@store_missing_person');
    Route::get('missing_person','SubmitReport@Show_numberMissing');

    Route::get('abuse','SubmitReport@abuse');
    Route::post('abuse','SubmitReport@store_aboused_person');
    Route::get('abuse','SubmitReport@Show_numberAbused');
    
    

    Route::get('home', 'HomeController@index');
    Route::get('robberyView','HomeController@robberyView');

    Route::get('missing_personView','HomeController@missing_personView');

    Route::get('abuseView','HomeController@abuseView');

    Route::get('post','HomeController@post_criminal');
    Route::post('post', 'HomeController@store');
    Route::get('post', 'HomeController@display');
    Route::get('edit/{id}', 'HomeController@editData');
    Route::post('update/{id}', 'HomeController@updateData');
    Route::get('delete/{id}','HomeController@deleteData');

    Route::get('mostWantedCriminals','Crime@mostWantedCriminals');
    Route::get('crimestatistics','HomeController@crimeStatistics');
    Route::post('crime_submit','HomeController@store_statistics');
    Route::get('crimestatistics','HomeController@viewStatistics');
    Route::get('crime_statistics','Crime@crimeStat');
    Route::get('delete_stat/{id}','HomeController@deleteStat');

    Route::get('police_station','HomeController@PoliceStation');
    Route::post('insert_police','HomeController@store_policestation');
    Route::get('police_station','HomeController@viewPolicestation');

    Route::get('find_police','Crime@getArea');
    Route::post('find_police','Crime@FindPolice');


    Route::get('find_fir','Crime@FindFIR');
    Route::get('find_fir_robbery','Crime@FindFIR_robbery');
    Route::post('find_firRobbery','SubmitReport@FindbyRand_robbery');
    Route::get('find_fir_mp','Crime@FindFIR_mp');
    Route::post('find_firMissing','SubmitReport@FindbyRand_mp');
    Route::get('find_fir_ab','Crime@FindFIR_ab');
    Route::post('find_firAbuse','SubmitReport@FindbyRand_ab');
    Route::get('find_police_complaint','Crime@FindPolice_complaint');
    Route::post('find_policeComplaint','SubmitReport@FindbyRand_police');
    Route::get('find_offender_complaint','Crime@FindOffender_complaint');
    Route::post('find_offenderComplaint','SubmitReport@FindbyRand_offender');

    Route::get('edit_robbery/{id}','SubmitReport@editRobbery');
    Route::get('delete_robbery/{id}','SubmitReport@deleteRobbery');
    Route::get('delete_missing/{id}','SubmitReport@deleteKidnapping');
    Route::get('delete_abuse/{id}','SubmitReport@deleteAbuse');
    Route::get('delete_police/{id}','SubmitReport@deletePolice');
    Route::get('delete_offender/{id}','SubmitReport@deleteOffender');


    Route::get('police_complaint','SubmitReport@getComplaint');
    Route::post('police_complaint','SubmitReport@store_police_complaint');
    Route::get('police_complaint','SubmitReport@showNumber_police');

    Route::get('offender_complaint','SubmitReport@getOffender');
    Route::post('offender_complaint','SubmitReport@store_offender_complaint');
    Route::get('offender_complaint','SubmitReport@Show_numberOffender');


    Route::get('police_phone','Crime@Getdivision');
    Route::post('police_phone','Crime@ViewPoliceNumber');

    Route::get('police_complaintView','HomeController@policeComplaintView');
    Route::get('offender_view','HomeController@OffenderView');
    Route::get('delete_police/{id}','HomeController@deletePolice');
    Route::get('delete_offender/{id}','HomeController@deleteOffender');
    Route::get('delete_abuse/{id}','HomeController@deleteAbuse');
    Route::get('delete_robbery/{id}','HomeController@deleteRobbery');
    Route::get('delete_missing/{id}','HomeController@deleteMissing');
    Route::get('delete/{id}','HomeController@deleteStation');

    Route::get('contact','SubmitReport@getContact');

    Route::get('phone','Crime@getNumber');
    Route::post('phone_number','Crime@store_phone');
});