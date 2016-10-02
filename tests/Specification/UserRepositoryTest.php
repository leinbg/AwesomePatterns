<?php

use AwesomePatterns\Specification\UserRepository;
use AwesomePatterns\Specification\User;
use AwesomePatterns\Specification\UserIsGold;

/**
 * Class UserRepositoryTest
 */
class UserRepositoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_can_filter_all_gold_users_by_specification()
    {
        $userRepo = new UserRepository([
            new User(1, 1),
            new User(2, 2),
            new User(1, 1),
            new User(2, 1),
            new User(1, 1),
        ]);

        $this->assertCount(3, $userRepo->matchSpecification(new UserIsGold));
    }
}
