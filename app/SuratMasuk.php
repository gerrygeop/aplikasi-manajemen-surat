<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'surat_masuk';

    protected $guarded = [];


    public function users()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sifat_surat()
    {
    	return $this->belongsTo(SifatSurat::class);
    }

    public function disposisi()
    {
        return $this->hasOne(Disposisi::class, 'surat_id', 'id');
    }

}
