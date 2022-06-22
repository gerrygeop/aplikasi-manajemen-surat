<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call([
        	UserSeeder::class,
        	RoleSeeder::class,
            RoleUserSeeder::class,
        	PermissionSeeder::class,
        	PermissionRoleSeeder::class,
        	BidangSeeder::class,
        ]);
    }
}
