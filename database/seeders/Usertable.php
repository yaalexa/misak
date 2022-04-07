<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;


class Usertable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'shuck',
            'full_name' => 'daniel camilo',
            'document_type' => 'cc',
            'document_number' => '13212456',
            'certificate_misak' => '01236462',
            'email' => 'camilo@gmai.com',
            'password' => '123456',
            'rols_id' => 1
        ]);
    }
}
