<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Arya',
                'lastname' => 'Latanzana',
                'email'=> 'aryalatanzana@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Adzanil',
                'lastname' => 'Rachmadhi',
                'email'=> 'adzanil.rachmadhi@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Zana',
                'lastname' => 'tan',
                'email'=> 'tanzana@gmail.com',
                'age' => 13,
                'position_id' => 3
            ],
        ]);
    }
}
