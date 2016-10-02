<?php

namespace AwesomePatterns\Specification;

/**
 * Class UserIsGold
 *
 * @package AwesomePatterns\Specification
 */
class UserIsGold implements PremiumUserSpecification
{
    /**
     * @param User $user
     *
     * @return bool
     */
    public function isSatisfiedBy(User $user)
    {
        return $user->getDomainLevel() == 1 && $user->getEmailLevel() == 1;
    }
}
