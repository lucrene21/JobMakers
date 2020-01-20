<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class UserUser
 * 
 * @property int $user_id
 * @property int $user_id2
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserUser extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'user_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'user_id2' => 'int'
	];

	protected $fillable = [
		'user_id',
		'user_id2'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'user_id2');
	}
}
