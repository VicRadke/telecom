<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modalidads')->insert([
            // Add your modalities here
            ['id' => 1, 'name' => 'Prácticas profesionales'],
            ['id' => 2, 'name' => 'Estadía profesional'],
            ['id' => 3, 'name' => 'Prácticas laborales'],
            ['id' => 4, 'name' => 'Residencias profesionales'],
            ['id' => 5, 'name' => 'Servicio social'],
        ]);
    }
}
