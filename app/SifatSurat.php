<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SifatSurat extends Model
{
	protected $table = 'sifat_surat';

	protected $guarded = [];


    public function surat_masuk()
    {
    	return $this->hasMany(SuratMasuk::class, 'sifat_surat_id', 'id');
    }
}
