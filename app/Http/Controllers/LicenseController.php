<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function getIndex()
    {
        //return view('');
        return view('home');
    }
    public function getLicencias()
    {
        //return view('');
        return view('licencia.index');
    }

}
