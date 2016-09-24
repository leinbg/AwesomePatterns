<?php

use AwesomePatterns\FluentInterface\User;

/**
 * Class RegisterUserTest
 */
class RegisterUserTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_register_a_user()
    {
        $user = new User;
        $user->register();
        $this->expectOutputString(
            'existing user email checked' . PHP_EOL .
            'new user created' . PHP_EOL .
            'redirected' . PHP_EOL
        );
    }
}
