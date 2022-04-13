<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', 'App\\Http\\Controllers\\LicenseController@getIndex');
