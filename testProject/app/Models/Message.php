<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Message
 * 
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $content
 * @property bool $is_read
 * @property \Carbon\Carbon $created_at
 * @property string $deleted_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Message extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'message';

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'is_read' => 'bool'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id',
		'content',
		'is_read'
	];
}
