<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupervisorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stype = ['Academic', 'Technical'];
        for ($i = 0; $i < count($stype); $i++) {
            DB::table('supervisor_types')->insert([
                'id' => $i+1,
                'title' => $stype[$i],
                'created_by' => 1,
            ]);
        }
    }
}
