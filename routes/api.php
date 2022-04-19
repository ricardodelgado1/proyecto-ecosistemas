<?php
use App\Http\Controllers\API\APILicenciasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/licencias', 'App\Http\Controllers\API\APILicenciasController@index');

Route::get('/v1/licencias/{id}', 'App\Http\Controllers\API\APILicenciasController@show');

Route::post('/v1/licencias', 'App\Http\Controllers\API\APILicenciasController@store');

Route::put('/v1/licencias/{id}', 'App\Http\Controllers\API\APILicenciasController@update');

Route::delete('/v1/licencias/{id}', 'App\Http\Controllers\API\APILicenciasController@destroy');

/* Route::post('/v1/licencias', 'App\Http\Controllers\API\APILicenciasController@store')->middleware('auth.basic');

Route::put('/v1/licencias/{id}', 'App\Http\Controllers\API\APILicenciasController@update')->middleware('auth.basic');

Route::delete('/v1/licencias/{id}', 'App\Http\Controllers\API\APILicenciasController@destroy')->middleware('auth.basic'); */
