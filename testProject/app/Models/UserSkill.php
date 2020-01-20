<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class UserSkill
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $skill_id
 * @property int $user_id
 * 
 * @property \App\Models\Skill $skill
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class UserSkill extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'user_skill';

	protected $casts = [
		'skill_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'skill_id',
		'user_id'
	];

	public function skill()
	{
		return $this->belongsTo(\App\Models\Skill::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
