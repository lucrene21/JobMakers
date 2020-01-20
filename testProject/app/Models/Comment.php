<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Comment
 * 
 * @property int $id
 * @property int $user_id
 * @property int $offer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $message
 * @property \Carbon\Carbon $read_at
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Offer $offer
 *
 * @package App\Models
 */
class Comment extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'comment';

	protected $casts = [
		'user_id' => 'int',
		'offer_id' => 'int'
	];

	protected $dates = [
		'read_at'
	];

	protected $fillable = [
		'user_id',
		'offer_id',
		'message',
		'read_at'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function offer()
	{
		return $this->belongsTo(\App\Models\Offer::class);
	}
}
