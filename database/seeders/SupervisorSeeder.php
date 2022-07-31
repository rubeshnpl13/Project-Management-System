<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supervisors')->insert([
            'id'=>1,
            'name' => 'Dhiraj Kumar Jha',
            'supervisor_type_id' => 1,
            'created_by' => 1
        ]);
        DB::table('supervisors')->insert([
            'id'=>2,
            'name' => 'Basanta Chapagain',
            'supervisor_type_id' => 2,
            'created_by' => 1
        ]);
    }
}
