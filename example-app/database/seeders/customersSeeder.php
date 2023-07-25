<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Integer;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'Id'=>Integer::random(3),
            'Name'=>Str::random(10),
            'Price'=>Integer::random(5),
            'Image'=>Str::random(10)
        ]);
    }
}
