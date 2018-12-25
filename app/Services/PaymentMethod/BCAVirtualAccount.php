<?php

namespace App\Services\PaymentMethod;

use App\User;
use App\Services\Orders\Order;
use App\Contracts\PaymentMethod;

class BCAVirtualAccount implements PaymentMethod
{
    
    /**
     * We need to handle payment!
     *
     * @param  Order  $order
     * @param  User   $user
     * @return mixed
     */
    public function pay(Order $order, User $user)
    {

        // disini ada logic yang komplek banget deh

        return 'ini dibayar pake BCA Virtual Account ya';
    }

    /**
     * We handle verification!
     *
     * @param  User $user
     * @return bool
     */
    public function verify(User $user)
    {
        return $user->emailIsVerified();
    }
}
