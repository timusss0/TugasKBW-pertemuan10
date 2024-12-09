<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'first_name'=>'tia',
                'last_name'=>'mustika',
                'gender'=>'female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name'=>'jawir',
                'last_name'=>'ramadhani',
                'gender'=>'female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
