<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    protected $table = 'bidang';

    protected $guarded = [];

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
