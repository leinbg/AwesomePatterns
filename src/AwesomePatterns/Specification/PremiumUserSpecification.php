<?php

namespace AwesomePatterns\Specification;

/**
 * Interface PremiumUserSpecification
 *
 * @package AwesomePatterns\Specification
 */
interface PremiumUserSpecification
{

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function isSatisfiedBy(User $user);
}
