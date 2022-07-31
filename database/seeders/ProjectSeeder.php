<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id'=>1,
            'batch_id'=>1,
            'title' => 'ML',
            'supervisor_id' => 1,
            'organization_id' =>1,
            'created_by' => 1,

        ]);

        DB::table('projects')->insert([
            'id'=>2,
            'batch_id'=>2,
            'title' => 'MERN',
            'supervisor_id' => 2,
            'organization_id' =>2,
            'created_by' => 1,

        ]);
    }
}
