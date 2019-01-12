<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Services\Orders\Order;
use App\Services\PaymentMethod\PaymentMethodRegistry;

class PaymentController extends Controller
{
    /**
     * The PaymentMethodRegistry instance.
     * 
     * @var PaymentMethodRegistry
     */
    protected $paymentMethod;

    /**
     * Build the Controller instance.
     * 
     * @param  PaymentMethodRegistry $paymentMethod
     * @return void
     */
    public function __construct(PaymentMethodRegistry $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Pay the product
     * 
     * @param  Request $request
     * @return Rsponse
     */
    public function pay(Request $request, $method) {
        if(!$this->paymentMethod->has($method)) {
            return sprintf('Gak ada payment method %s woy!', $method);
        }

        $user          = app(User::class);
        $user->name    = 'Aril Piterpen';
        $user->email   = 'aril@piterpen.com';
        $orders        = app(Order::class);
        $paymentMethod = $this->paymentMethod->get($method);

        // verify the payment, and process the payment
        if($paymentMethod->verify($user)) {
            return $paymentMethod->pay($orders, $user);
        }
    }
}
