<?php

/**
 * Generated file
 */

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class User
 *
 * @property int $id
 * @property int $role_id
 * @property \Carbon\Carbon $created_at
 * @property string $deleted_at
 * @property \Carbon\Carbon $updated_at
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $first_name
 * @property string $last_name
 * @property \Carbon\Carbon $email_verified_at
 * @property string $remember_token
 * @property string $longitude
 * @property string $latitude
 * @property \Carbon\Carbon $disabled_at
 * @property \Carbon\Carbon $logout_at
 * @property bool $is_online
 *
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Award[] $awards
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Localisation[] $localisations
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\UserSkill[] $user_skills
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\UserUser[] $user_users
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use \Illuminate\Database\Eloquent\SoftDeletes, Notifiable;
	protected $table = 'user';

	protected $casts = [
		'role_id' => 'int',
		'is_online' => 'bool'
	];

	protected $dates = [
		'email_verified_at',
		'disabled_at',
		'logout_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
	    'role_id',
		'password',
		'email',
		'phone',
		'first_name',
		'last_name',
		'email_verified_at',
		'remember_token',
		'longitude',
		'latitude',
		'disabled_at',
		'logout_at',
		'is_online'
	];

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}

	public function awards()
	{
		return $this->hasMany(\App\Models\Award::class);
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class);
	}

	public function jobs()
	{
		return $this->hasMany(\App\Models\Job::class);
	}

	public function localisations()
	{
		return $this->hasMany(\App\Models\Localisation::class);
	}

	public function offers()
	{
		return $this->hasMany(\App\Models\Offer::class);
	}

	public function orders()
	{
		return $this->hasMany(\App\Models\Order::class, 'validator_id');
	}

	public function tags()
	{
		return $this->hasMany(\App\Models\Tag::class);
	}

	public function skills()
	{
		return $this->belongsToMany(\App\Models\Skill::class, 'user_skill')
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function user_skills()
	{
		return $this->hasMany(\App\Models\UserSkill::class);
	}

	public function user_users()
	{
		return $this->hasMany(\App\Models\UserUser::class, 'user_id2');
	}

	public function messages() {
	    return $this->hasMany(\App\Models\Message::class, 'receiver_id');
    }

	public function isAdmin() {
	    return $this->role->code == config('jobmaker.codes.role.admin');
    }
    public function isWorker() {
	    return $this->role->code == config('jobmaker.codes.role.worker');
    }
    public function isEmployer() {
	    return $this->role->code == config('jobmaker.codes.role.employer');
    }

    public function countReadMessage() {
	    return $this->messages()->where('is_read', false)->count();
    }
}
