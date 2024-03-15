<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'name' => 'Mihai Vescan',
            'email' => 'vescmihai@gmail.com',
            'password' => bcrypt('mihai123'),
            //'id_privilegio' => '4',
            'estado' => '0',

        ]);
    }
}
