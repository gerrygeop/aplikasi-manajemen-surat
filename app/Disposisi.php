<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'disposisi';

    protected $guarded = [];

    public function user()
    {
    	return $this->hasOne(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_disposisi', 'user_id', 'disposisi_id');
    }

    public function surat_masuk()
    {
    	return $this->belongsTo(SuratMasuk::class, 'surat_id', 'id');
    }

    public function getVerifikasi()
    {
        if ($this->verifikasi == 0)
        {
            return 'Tidak';
        }

        return 'Ya';
    }
}
