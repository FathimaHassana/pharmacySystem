<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'hassana',
            'email'=>'hassana@example.com',
            'password' =>'example123',
            'user_type'=>'owner'
        ]);
    }
}
