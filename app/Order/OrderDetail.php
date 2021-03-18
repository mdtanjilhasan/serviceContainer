<?php

namespace App\Order;

use App\Billing\PaymentGateway;

class OrderDetail
{
	protected $payment;
	public function __construct(PaymentGateway $payment)
	{
		$this->payment = $payment;
	}

	public function all()
	{
		$this->payment->setDiscount(500);
		return [
			'success' => true
		];
	}
}