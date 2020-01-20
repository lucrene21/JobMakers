<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Offer
 * 
 * @property int $id
 * @property int $user_id
 * @property int $job_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property float $price_min
 * @property float $price_max
 * @property string $description
 * @property int $delivery_time
 * @property int $revision
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Job $job
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 *
 * @package App\Models
 */
class Offer extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'offer';

	protected $casts = [
		'user_id' => 'int',
		'job_id' => 'int',
		'price_min' => 'float',
		'price_max' => 'float',
		'delivery_time' => 'int',
		'revision' => 'int'
	];

	protected $fillable = [
		'user_id',
		'job_id',
		'label',
		'price_min',
		'price_max',
		'description',
		'delivery_time',
		'revision'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function job()
	{
		return $this->belongsTo(\App\Models\Job::class);
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class);
	}
}
