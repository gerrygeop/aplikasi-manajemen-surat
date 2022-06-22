<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $guarded = [];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin()
    {
        return $this->roles()->where('role_id', 1)->exists();
    }

    public function assignRole($role)
    {
        $this->roles()->sync($role);
    }

    public function permissions()
    {
        return $this->roles->map->permissions->flatten()->pluck('permission_name')->unique();
    }

    public function surat_masuk()
    {
        return $this->hasMany(SuratMasuk::class);
    }

    public function disposisi()
    {
        return $this->belongsToMany(Disposisi::class, 'user_disposisi', 'user_id', 'disposisi_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }

}
