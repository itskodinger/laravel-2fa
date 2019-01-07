<?php
 
namespace App\Contracts;

use App\User;
use Illuminate\View\View;

interface TwoFactor {

    /**
     * Request code.
     * 
     * @param  User $user
     * @return mixed
     */
    public function requestCode(User $user);

    /**
     * Verify the code.
     * 
     * @param  Uset       $user 
     * @param  string|int $code
     * @return bool
     */
    public function verifyCode(User $user, $code) : bool;

    /**
     * Get the authentication form that will be displayed on user login.
     * 
     * @return View
     */
    public function getAuthenticationForm() : View; 

    /**
     * Get the TwoFactor provider name.
     * 
     * @return string|null
     */
    public function getProviderName();
}