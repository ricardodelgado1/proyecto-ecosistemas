<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licencia;
use DataTables;

class LicenseController extends Controller
{
    public function getIndex()
    {
        //return view('');
        return view('home');
    }
    public function getLicencias()
    {
        //smilify('success', 'You are successfully reconnected');

        $licencias= Licencia::all();

        //connectify('success','success','Catalogo Encontrado!');
        return view('licencia.index', ['licencias'=>$licencias]);

        /*  return view('catalog.index', ['arrayPeliculas' => $this->arrayPeliculas]); */

        return view('licencia.index');

    }
    public function getTableLicencias(Request $request)
    {
        //return view('');
        if ($request->ajax()) {
            $data = Licencia::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->rawColumns(['action'])
                ->make(true);
        }

    }



}
