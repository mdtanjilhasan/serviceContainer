<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Order\OrderDetail;

class TestController extends Controller
{

	// public function __construct()
	// {
	// 	app()->singleton(PaymentGateway::class,function(){
	// 		return new PaymentGateway('bdt');
	// 	});	
	// }
	
    public function store(OrderDetail $detail,PaymentGateway $payment) // this is loaded via php reflectionclass
    {
    	$order = $detail->all();
    	// $payment = new PaymentGateway('usd');
    	// dd($payment);
    	// $request = new Request(); 
    	dd($payment->charge(1000));
    }
}
