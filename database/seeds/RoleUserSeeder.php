<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('role_user')->insert([
    		'user_id' => 1,
    		'role_id' => 1,
        ]);
    }
}
