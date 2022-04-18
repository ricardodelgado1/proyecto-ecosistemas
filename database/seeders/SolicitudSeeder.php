<?php

namespace Database\Seeders;

use App\Models\Solicitude;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            array('nombre'=> 'Modificación', 'porcentaje'=>20.30),
            array('nombre'=> 'Nuevo', 'porcentaje'=>79.70),
        ];
        Solicitude::insert($data);
    }
}
