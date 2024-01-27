<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parentescos')->insert([
            // Add your parentescos here
            ['id' => 1, 'name' => 'Padre'],
            ['id' => 2, 'name' => 'Madre'],
            ['id' => 3, 'name' => 'Cónyugue'],
            ['id' => 4, 'name' => 'Contacto de emergencia'],
        ]);
    }
}
