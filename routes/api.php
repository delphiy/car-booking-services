<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function (Request $request) {
    return 'hello';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('car-service', 'CarServiceController@index');
Route::get('car-service/service-types/{id}','CarServiceController@getServiceTypes');
Route::get('car-service/mechanic-availabilities/{date}', 'CarServiceController@getAvailableMechanics');

Route::group(['middleware' => ['auth:api']], function () {

    //Car Services
    Route::post('car-service', 'CarServiceController@create');
    Route::put('car-service/{id}','CarServiceController@update');
    Route::delete('car-service/{id}','CarServiceController@delete');

    //Service Type, Mechanic, Booking Date Crud will be similar to above
});


