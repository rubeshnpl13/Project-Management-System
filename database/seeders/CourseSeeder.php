<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $course = ['Academic', 'Technical'];
        $courseid = ['Academic', 'Technical'];
        for ($i = 0; $i < count($course); $i++) {
            DB::table('courses')->insert([
                'id' => $i+1,
                'program_id' => $i+1,
                'semester' => 8,
                'code' => $courseid[$i],
                'status' => 1,
                'name' => $course[$i],
                'created_by' => 1,
            ]);
        }
    }
}
