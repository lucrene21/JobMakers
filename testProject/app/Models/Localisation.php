<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Localisation
 * 
 * @property int $id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $address
 * @property string $country
 * @property string $city
 * @property string $region
 * @property string $longitude
 * @property string $latitude
 * @property bool $is_active
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 *
 * @package App\Models
 */
class Localisation extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'localisation';

	protected $casts = [
		'user_id' => 'int',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'address',
		'country',
		'city',
		'region',
		'longitude',
		'latitude',
		'is_active'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}
}
