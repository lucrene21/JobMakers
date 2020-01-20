<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Task
 * 
 * @property int $id
 * @property int $job_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $description
 * @property string $state
 * 
 * @property \App\Models\Job $job
 *
 * @package App\Models
 */
class Task extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'task';

	protected $casts = [
		'job_id' => 'int'
	];

	protected $fillable = [
		'job_id',
		'label',
		'description',
		'state'
	];

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}
}
