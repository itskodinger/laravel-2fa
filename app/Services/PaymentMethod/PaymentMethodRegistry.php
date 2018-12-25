<?php 

namespace App\Services\PaymentMethod;

use App\Contracts\PaymentMethod;
use App\Exceptions\UnknownPaymentMethodException;

class PaymentMethodRegistry {

    /**
     * Registered Payment Method.
     * 
     * @var array
     */
    protected $paymentMethods = [];

    /**
     * Register new Payment Method.
     * 
     * @param  string        $key
     * @param  PaymentMethod $method
     * @return void
     */
    public function register($key, PaymentMethod $method) {
        return $this->paymentMethods[$key] = $method;
    }

    /**
     * Get the Payment Method based on the given key.
     * 
     * @param  string $key
     * @return PaymentMethod
     * 
     * @throws UnknownPaymentMethodException
     */
    public function get($key) {
        if($this->has($key)) return $this->paymentMethods[$key];

        throw new UnknownPaymentMethodException($key);
    }

    /**
     * Determine if the payment method with the given key exists.
     * 
     * @param  string $key
     * @return bool
     */
    public function has($key) {
        return isset($this->paymentMethods[$key]);
    }

    /**
     * Get all available Payment Method
     * 
     * @return Collection
     */
    public function all() {
        return collect($this->paymentMethods);
    }
}