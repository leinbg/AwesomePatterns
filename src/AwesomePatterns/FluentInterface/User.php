<?php

namespace AwesomePatterns\FluentInterface;

/**
 * Class User
 *
 * @package AwesomePatterns\FluentInterface
 */
class User
{

    /**
     *  register a user
     */
    public function register()
    {
        $this->checkExistingUser()
             ->createNewUser()
             ->redirect();
    }

    /**
     * @return $this
     */
    protected function checkExistingUser()
    {
        echo 'existing user email checked' . PHP_EOL;

        return $this;
    }

    /**
     * @return $this
     */
    protected function createNewUser()
    {
        echo 'new user created' . PHP_EOL;

        return $this;
    }

    /**
     * @return $this
     */
    protected function redirect()
    {
        echo 'redirected' . PHP_EOL;

        return $this;
    }
}
