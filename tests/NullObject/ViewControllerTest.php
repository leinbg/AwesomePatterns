<?php

use AwesomePatterns\NullObject\User;
use AwesomePatterns\NullObject\NullUser;
use AwesomePatterns\NullObject\ViewController;

/**
 * Class ViewControllerTest
 */
class ViewControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_returns_a_real_user_when_logged_in()
    {
        $view = new ViewController;
        $_COOKIE['null_object_user_id'] = 'fake';
        $user = $view->getUser();

        $this->assertEquals('real user', $user->name);
        $this->assertEquals('real address', $user->getAddress());
    }

    /**
     * @test
     */
    public function it_returns_a_null_user_when_not_logged_in()
    {
        $view = new ViewController;
        $_COOKIE['null_object_user_id'] = null;
        $user = $view->getUser();

        $this->assertEquals('', $user->name);
        $this->assertEquals('', $user->getAddress());
    }
}
