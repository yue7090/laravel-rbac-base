<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [];

    public function role()
    {
        return $this->belongsToMany('Modules\Backend\Entities\Role', 'user_role', 'user_id', 'role_id');
    }
}
