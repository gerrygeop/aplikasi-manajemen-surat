<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Super Admin',
        	'username' => 'admin',
        	'password' => Hash::make('asdfg'),
        	'nip' => '08080808080',
        ]);
    }
}
