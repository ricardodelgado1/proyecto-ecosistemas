<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\EstadisticasController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', 'App\\Http\\Controllers\\LicenseController@getIndex');
Route::get('home', 'App\\Http\\Controllers\\LicenseController@getIndex');


Route::get('/licencias', 'App\\Http\\Controllers\\LicenseController@getLicencias');
Route::get('/licencias/table', 'App\\Http\\Controllers\\LicenseController@getTableLicencias')->name('licencias.table');


Route::get('/contacto', 'App\\Http\\Controllers\\ContactoController@getContacto');

Route::get('/sobrenosotros', 'App\\Http\\Controllers\\ContactoController@getSobrenosotros');

//Route::get('/estadisticas', 'App\\Http\\Controllers\\EstadisticasController@getEstadistica');
Route::get('estadisticas',[EstadisticasController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});


