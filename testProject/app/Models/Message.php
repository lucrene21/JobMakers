<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Message
 * 
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property bool $is_read
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Message extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'message';

	protected $casts = [
		'user_id' => 'int',
		'is_read' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'title',
		'content',
		'is_read'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
