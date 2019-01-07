<?php 

namespace App\Contracts\TwoFactor;

use App\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

interface HasActivation {

    /**
     * Return the form that will be displaying when activating 2fa.
     * 
     * @param  User $user
     * @return View
     */
    public function getActivationForm(User $user) : View;

    /**
     * Handle the submitted data from the activation form.
     * 
     * @param  User    $user 
     * @param  Request $request
     * @return mixed
     */
    public function handleActivationForm(User $user, Request $request);
}