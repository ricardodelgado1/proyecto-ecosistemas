<?php

namespace Database\Seeders;

use App\Models\Estadistica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('nombre'=> 'Hidrocarburos', 'porcentaje'=>14.2),
            array('nombre'=> 'Energia', 'porcentaje'=>12.6),
            array('nombre'=> 'Infraestructura', 'porcentaje'=>7.3),
            array('nombre'=> 'Agroquímicos y Proyectos Especiales', 'porcentaje'=>64.6),
            array('nombre'=> 'Mineria', 'porcentaje'=>1.2),
        ];
        Estadistica::insert($data);
    }
}
