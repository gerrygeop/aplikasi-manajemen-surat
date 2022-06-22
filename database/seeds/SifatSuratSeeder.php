<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SifatSuratSeeder extends Seeder
{
   
    public function run()
    {
        DB::table('sifat_surat')->insert([
        	[
	        	'name' => 'Penting',
	        ],
	    	[
	    		'name' => 'Segera',
	    	],
	    	[
	    		'name' => 'Biasa',
	    	]
    	]);
    }
}
