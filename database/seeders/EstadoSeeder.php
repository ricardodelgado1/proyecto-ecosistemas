<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
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
            array('nombre'=> 'resuelto', 'porcentaje'=>44.30),
            array('nombre'=> 'suspendido', 'porcentaje'=>6.10),
            array('nombre'=> 'pendiente', 'porcentaje'=>16.30),
            array('nombre'=> 'en evaluacion', 'porcentaje'=>33.30),
        ];
        Estado::insert($data);
    }
}
