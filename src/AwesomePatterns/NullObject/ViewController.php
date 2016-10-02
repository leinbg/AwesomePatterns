<?php

namespace AwesomePatterns\NullObject;

/**
 * Class ViewController
 *
 * @package AwesomePatterns\NullObject
 */
class ViewController
{

    /**
     * @return NullUser|User
     */
    public function getUser()
    {
        $user = $this->isUserLoggedIn() ? new User : new NullUser;

        return $user;
    }

    /**
     * test function simulate faked auth
     *
     * @return bool
     */
    public function isUserLoggedIn()
    {
        return isset($_COOKIE['null_object_user_id']);
    }
}
