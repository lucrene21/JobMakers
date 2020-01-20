<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Tag
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $job_id
 * @property int $user_id
 * 
 * @property \App\Models\Job $job
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Tag extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'tag';

	protected $casts = [
		'job_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'job_id',
		'user_id'
	];

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
