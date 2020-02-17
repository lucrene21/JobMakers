<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Job
 *
 * @property int $id
 * @property int $localisation_id
 * @property int $category_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $description
 * @property string $type
 * @property float $price_min
 * @property float $price_max
 * @property int $delivery_time
 *
 * @property \App\Models\Category $category
 * @property \App\Models\Localisation $localisation
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\JobSkill[] $job_skills
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 *
 * @package App\Models
 */
class Job extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'job';

	protected $casts = [
		'localisation_id' => 'int',
		'category_id' => 'int',
		'user_id' => 'int',
		' ' => 'float',
		'price_max' => 'float',
		'delivery_time' => 'int'
	];

	protected $fillable = [
		'localisation_id',
		'category_id',
		'user_id',
		'label',
		'description',
		'type',
		'price_min',
		'price_max',
		'delivery_time'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function localisation()
	{
		return $this->belongsTo(\App\Models\Localisation::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function skills()
	{
		return $this->belongsToMany(\App\Models\Skill::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function job_skills()
	{
		return $this->hasMany(\App\Models\JobSkill::class);
	}

	public function offers()
	{
		return $this->hasMany(\App\Models\Offer::class);
	}

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class);
	}

	public function tags()
	{
		return $this->hasMany(\App\Models\Tag::class);
	}

	public function tasks()
	{
		return $this->hasMany(\App\Models\Task::class);
	}
}
