<?php

/**
 * Generated file
 */

namespace App\Models;



/**
 * Class Payment
 *
 * @property int $id
 * @property int $payment_method_id
 * @property int $order_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property float $amount
 * @property float $fee
 * @property string $identifiant
 * @property string $signature
 * @property string $reference
 * @property string $transaction_id
 * @property string $status
 *
 * @property \App\Models\Order $order
 * @property \App\Models\PaymentMethod $payment_method
 *
 * @package App\Models
 */
class Payment extends \Illuminate\Database\Eloquent\Model
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'payment';

	protected $casts = [
		'payment_method_id' => 'int',
		'order_id' => 'int',
		'amount' => 'float',
		'fee' => 'float'
	];

	protected $fillable = [
		'payment_method_id',
		'order_id',
		'amount',
		'fee',
		'identifiant',
		'signature',
		'reference',
		'transaction_id',
		'status'
	];

	public function order()
	{
		return $this->belongsTo(\App\Models\Order::class);
	}

	public function payment_method()
	{
		return $this->belongsTo(\App\Models\PaymentMethod::class);
	}
}
