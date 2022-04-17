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
            array('nombre'=> 'Sector Minero', 'porcentaje'=>61.4),
            array('nombre'=> 'Sector Energetico', 'porcentaje'=>11.8),
            array('nombre'=> 'Sector Hidrocarburos', 'porcentaje'=>10.9),
            array('nombre'=> 'Infraestructura: carreteras', 'porcentaje'=>4.7),
            array('nombre'=> 'Infraestructura: puerto', 'porcentaje'=>4.2),
            array('nombre'=> 'Otras', 'porcentaje'=>1.6),
        ];
        Estadistica::insert($data);
    }
}
