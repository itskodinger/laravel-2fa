<?php 

namespace App\Contracts\Messages;

interface Failed {

    /**
     * Set the message.
     * 
     * @param  string|int $message
     * @return void
     */
    public function setMessage($message);

    /**
     * Get the message.
     * 
     * @return string|null 
     */
    public function getMessage();
}