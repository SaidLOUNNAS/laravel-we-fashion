<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create Admin
        DB::table('uers')->insert([
            'name'=>'admin',
            'email'=>'said.lounnas1@gmail.com',
            'password'=>Hash::make('AdminAdmin')
          ]);
    }
}
