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
        $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,20) as $index) {
            DB::table('licencias')->insert([
                'nombre' => $faker->name($gender),
                'fecha' => $faker->date(),
                'departamento' => $faker->name(),
                'tipo' => $faker->text(),
                'estado' => $faker->boolean(),
            ]);
        }
        $this->call(EstadisticaSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(SolicitudSeeder::class);

    }
}
