<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([
            'id'=>1,
            'year' => 2022,
            'created_by' => 1,
        ]);
        DB::table('batches')->insert([
            'id'=>2,
            'year' => 2018,
            'created_by' => 1,
        ]);


    }
}
