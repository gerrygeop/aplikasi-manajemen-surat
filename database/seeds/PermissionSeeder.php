<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('permissions')->insert([
            [
            	'permission_name' => 'edit_master',
            ],
        	[
        		'permission_name' => 'edit_surat',
        	],
        	[
        		'permission_name' => 'edit_dispos',
            ],
        	[
        		'permission_name' => 'read_surat',
            ]
    	]);
    }
}
