<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('bidang')->insert([
	    	[
	    		'nama_bidang' => 'Anggaran',
	    	],
	    	[
	    		'nama_bidang' => 'Perbendarahaan',
	    	],
        	[
	        	'nama_bidang' => 'Akuntansi',
	        ],
	    	[
	    		'nama_bidang' => 'Pengelolaan Barang Milik Daerah',
	    	],
	    	[
	    		'nama_bidang' => 'Perusahaan Daerah',
	    	],
	    	[
	    		'nama_bidang' => 'Sekretariat',
	    	]
    	]);
    }
}
