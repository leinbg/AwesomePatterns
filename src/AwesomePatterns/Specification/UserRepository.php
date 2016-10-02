<?php

namespace AwesomePatterns\Specification;

/**
 * Class UserRepository
 *
 * @package AwesomePatterns\Specification
 */
class UserRepository
{

    /**
     * @var array
     */
    protected $users;

    /**
     * UserRepository constructor.
     *
     * @param array $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }

    /**
     * @param PremiumUserSpecification $specification
     *
     * @return array
     */
    public function matchSpecification(PremiumUserSpecification $specification)
    {
        $matches = [];

        foreach ($this->users as $user) {
            if ($specification->isSatisfiedBy($user)) {
                $matches[] = $user;
            }
        }

        return $matches;
    }
}
