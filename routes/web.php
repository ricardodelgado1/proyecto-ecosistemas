<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\\Http\\Controllers\\LicenseController@getIndex');
Route::get('home', 'App\\Http\\Controllers\\LicenseController@getIndex');

Route::get('/licencias', 'App\\Http\\Controllers\\LicenseController@getLicencias');

Route::get('/contacto', 'App\\Http\\Controllers\\ContactoController@getContacto');

Route::get('/sobrenosotros', 'App\\Http\\Controllers\\ContactoController@getSobrenosotros');
