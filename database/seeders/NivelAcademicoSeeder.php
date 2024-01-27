<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nivel_academicos')->insert([
            ['id' => 1, 'name' => 'Primaria'],
            ['id' => 2, 'name' => 'Secundaria'],
            ['id' => 3, 'name' => 'Bachillerato'],
            ['id' => 4, 'name' => 'Licenciatura'],
            ['id' => 5, 'name' => 'Maestría'],
            ['id' => 6, 'name' => 'Doctorado'],
            ['id' => 7, 'name' => 'Especialidad'],
        ]);
    }
}
