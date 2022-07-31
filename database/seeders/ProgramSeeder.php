<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'id'=>1,
            'title' => 'Csit',
            'no_of_semester' => 8,
            'status' =>1,
            'created_by' => 1,
        ]);
        DB::table('programs')->insert([
            'id'=>2,
            'title' => 'BIM',
            'no_of_semester' => 8,
            'status' =>1,
            'created_by' => 1,
        ]);
    }
}
