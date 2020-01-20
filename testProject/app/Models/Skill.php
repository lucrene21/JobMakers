<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Skill
 * 
 * @property int $id
 * @property int $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $description
 * @property string $level
 * @property string $document
 * 
 * @property \App\Models\Category $category
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\JobSkill[] $job_skills
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\UserSkill[] $user_skills
 *
 * @package App\Models
 */
class Skill extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'skill';

	protected $casts = [
		'category_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'label',
		'description',
		'level',
		'document'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function jobs()
	{
		return $this->belongsToMany(\App\Models\Job::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function job_skills()
	{
		return $this->hasMany(\App\Models\JobSkill::class);
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'user_skill')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function user_skills()
	{
		return $this->hasMany(\App\Models\UserSkill::class);
	}
}
