<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Category
 * 
 * @property int $id
 * @property int $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $description
 * 
 * @property \App\Models\Category $category
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 *
 * @package App\Models
 */
class Category extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'category';

	protected $casts = [
		'category_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'label',
		'description'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function categories()
	{
		return $this->hasMany(\App\Models\Category::class);
	}

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}

	public function skills()
	{
		return $this->hasMany(\App\Models\Skill::class);
	}
}
