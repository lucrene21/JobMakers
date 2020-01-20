<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Award
 * 
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $description
 * @property \Carbon\Carbon $started_at
 * @property \Carbon\Carbon $ended_at
 * @property string $picture
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Award extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'award';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'started_at',
		'ended_at'
	];

	protected $fillable = [
		'user_id',
		'label',
		'description',
		'started_at',
		'ended_at',
		'picture'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
