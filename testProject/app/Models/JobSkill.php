<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class JobSkill
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $skill_id
 * @property int $job_id
 * 
 * @property \App\Models\Skill $skill
 * @property \App\Models\Job $job
 *
 * @package App\Models
 */
class JobSkill extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'job_skill';

	protected $casts = [
		'skill_id' => 'int',
		'job_id' => 'int'
	];

	protected $fillable = [
		'skill_id',
		'job_id'
	];

	public function skill()
	{
		return $this->belongsTo(\App\Models\Skill::class);
	}

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}
}
