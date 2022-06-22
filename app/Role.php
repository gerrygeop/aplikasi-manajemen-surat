<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $guarded = [];

    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public function allowTo($permission)
    {
    	return $this->permissions()->sync($permission);
    }

    public function disallowTo($permission)
    {
    	return $this->permissions()->detach($permission);
    }

}
