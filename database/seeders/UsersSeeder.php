<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
            array('name'=> 'ricardo', 'email'=>'dricardojhovany@gmail.com', 'password'=>bcrypt('ricardo')),
            array('name'=> 'jairo', 'email'=>'jairorosero@gmail.com', 'password'=>bcrypt('jairo'))
        ];
        User::insert($data);
    }
}
