<?php 

namespace App\Contracts\TwoFactor;

use Carbon\Carbon;

interface HasReRequestVerification {

    /**
     * The timeout when user is allowed to request new code.
     * 
     * @return  Carbon
     */
    public function time() : Carbon;

}