<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
        //$gender = $faker->randomElement(['Proyecto A', 'Proyecto B', 'Proyecto C']);
        //$departamento = $faker->randomElement(['Nariño', 'Valle', 'Antioquia', 'Cundinamarca']);
        //$tipo = $faker->randomElement(['Hidrocarburos', 'Energia', 'Infraestructura', 'Agroquímicos y Proyectos Especiales', 'Mineria']);

        foreach (range(1,30) as $index) {
            DB::table('licencias')->insert([
                'nombre' =>$faker->randomElement(['Proyecto A', 'Proyecto B', 'Proyecto C']),
                'solicitante' =>$faker->randomElement(['Solicitante A', 'Solicitante B', 'Solicitante C']),
                'fecha' => $faker->date(),
                'departamento' => $faker->randomElement(['Nariño', 'Valle del Cauca	', 'Antioquia', 'Cundinamarca', 'Cauca', 'Atlántico', 'Amazonas','Arauca', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 'Casanare', 'Cesar', 'Chocó', 'Córdoba', 'Guaviare', 'Huila', 'Norte de Santander', 'Putumayo', 'Vaupés', 'Sucre']),
                'tipo' => $faker->randomElement(['Hidrocarburos', 'Energia', 'Infraestructura', 'Agroquímicos y Proyectos Especiales', 'Mineria']),
                'estado' => $faker->randomElement(['Resuelto', 'Suspendido', 'Pendiente', 'En evaluacion']),
            ]);
        }
        $this->call(EstadisticaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
