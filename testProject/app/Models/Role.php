<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Role
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $code
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 *
 * @package App\Models
 */
class Role extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'role';

	protected $fillable = [
		'label',
		'code'
	];

	public function users()
	{
		return $this->hasMany(\App\Models\User::class);
	}
}
