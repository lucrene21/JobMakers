<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Role
 * 
 * @property int $id
 * @property int $role_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $code
 * 
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 *
 * @package App\Models
 */
class Role extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'role';

	protected $casts = [
		'role_id' => 'int'
	];

	protected $fillable = [
		'role_id',
		'label',
		'code'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}

	public function roles()
	{
		return $this->hasMany(\App\Models\Role::class);
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class);
	}
}
