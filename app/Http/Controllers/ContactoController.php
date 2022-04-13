<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function getContacto()
    {
        //return view('');
        return view('contacto');
    }

    public function getSobrenosotros()
    {
        //return view('');
        return view('sobrenosotros');
    }
}
