<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	
	protected $table = 'roles';
	
	protected $hidden = [
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];

	public function users()
    {
        return $this->belongsToMany('Modules\Backend\Entities\User');
    }

    public function permission()
    {
        return $this->belongsToMany('Modules\Backend\Entities\Permission', 'permission_role', 'role_id', 'permission_id');
    }
}
