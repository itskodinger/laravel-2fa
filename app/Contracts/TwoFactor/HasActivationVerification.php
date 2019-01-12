<?php 

namespace App\Contracts\TwoFactor;

use App\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

interface HasActivationVerification {

    /**
     * Return the form that will be displaying when verifying 2fa.
     * 
     * @param  User $user
     * @return View
     */
    public function getVerificationForm(User $user) : View;

    /**
     * Handle the submitted data from the verification form.
     * 
     * @param  User    $user 
     * @param  Request $request
     * @return mixed
     */
    public function handleVerificationForm(User $user, Request $request);
}