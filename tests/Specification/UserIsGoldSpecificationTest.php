<?php

use AwesomePatterns\Specification\User;
use AwesomePatterns\Specification\UserIsGold;

/**
 * Class UserIsGoldSpecificationTest
 */
class UserIsGoldSpecificationTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_checks_if_user_is_gold()
    {
        $goldUser = new User(1, 1);
        $silverUser = new User(1, 2);
        $userIsGold = new UserIsGold;

        $this->assertTrue($userIsGold->isSatisfiedBy($goldUser));
        $this->assertFalse($userIsGold->isSatisfiedBy($silverUser));
    }
}
