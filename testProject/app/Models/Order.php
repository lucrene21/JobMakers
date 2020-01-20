<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Order
 * 
 * @property int $id
 * @property int $job_id
 * @property int $user_id
 * @property int $validator_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property float $price
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property string $state
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Job $job
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 *
 * @package App\Models
 */
class Order extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'order';

	protected $casts = [
		'job_id' => 'int',
		'user_id' => 'int',
		'validator_id' => 'int',
		'price' => 'float'
	];

	protected $dates = [
		'started_at',
		'ended_at'
	];

	protected $fillable = [
		'job_id',
		'user_id',
		'validator_id',
		'price',
		'started_at',
		'ended_at',
		'state'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'validator_id');
	}

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}

	public function payments()
	{
		return $this->hasMany(\App\Models\Payment::class);
	}
}
