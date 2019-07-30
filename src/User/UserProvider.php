<?php

namespace App\User;

use App\Model\User;

/**
 * Class UserProvider
 * @package App\User
 */
class UserProvider
{
    /**
     * Just imagine this actually returning the current logged in user
     *
     * @return User
     */
    public function getCurrentUser(): User
    {
        return new User(uniqid('user_', true));
    }
}