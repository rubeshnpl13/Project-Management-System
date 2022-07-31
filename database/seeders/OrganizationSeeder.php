<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
            'id'=>1,
            'name' => 'F1 Soft',
            'address' => 'KTM',
            'website' => 'www.f1soft.com',
            'email' => 'f1soft@gmail.com',
            'phone' => 981024567,
            'contact_person_name' => 'Nishant',
            'contact_person_email' => 'n@gmail.com',
            'contact_person_phone' => '9812345678',
            'created_by' => 1,

        ]);
        DB::table('organizations')->insert([
            'id'=>2,
            'name' => 'NASA',
            'address' => 'KTM',
            'website' => 'www.nasa.com',
            'email' => 'nasa@gmail.com',
            'phone' => 981024567,
            'contact_person_name' => 'Bhuwan',
            'contact_person_email' => 'b@gmail.com',
            'contact_person_phone' => '9812345678',
            'created_by' => 1,

        ]);
    }
}
