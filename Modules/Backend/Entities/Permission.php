<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['permission'];

    public function role()
    {
        return $this->belongsToMany('Modules\Backend\Entities\Role');
    }
}
