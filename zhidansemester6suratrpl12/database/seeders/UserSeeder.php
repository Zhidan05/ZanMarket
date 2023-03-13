<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Administrator',
            'email'=>'admin@super.co',
            'phone'=>'12312353',
            'password'=>Hash::make('111'),
            'role'=>'Admin',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('users')->insert([
            'name'=>'Udin',
            'email'=>'udin@user.co',
            'phone'=>'12311353',
            'password'=>Hash::make('111'),
            'role'=>'User',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
