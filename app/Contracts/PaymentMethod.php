<?php 

namespace App\Contracts;

use App\User;
use App\Services\Orders\Order;

interface PaymentMethod {

    /**
     * We need to handle payment!
     * 
     * @param  Order  $order
     * @param  User   $user
     * @return mixed
     */
    public function pay(Order $order, User $user);

    /**
     * We handle verification!
     * 
     * @param  User $user 
     * @return bool
     */
    public function verify(User $user);
}