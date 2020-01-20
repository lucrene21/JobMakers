<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class PaymentMethod
 * 
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $label
 * @property string $logo
 * @property string $code
 * @property bool $is_active
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 *
 * @package App\Models
 */
class PaymentMethod extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'payment_method';

	protected $casts = [
		'is_active' => 'bool'
	];

	protected $fillable = [
		'label',
		'logo',
		'code',
		'is_active'
	];

	public function payments()
	{
		return $this->hasMany(\App\Models\Payment::class);
	}
}
