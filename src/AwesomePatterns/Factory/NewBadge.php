<?php

namespace AwesomePatterns\Factory;

/**
 * Class NewBadge
 *
 * @package AwesomePatterns\Factory
 */
class NewBadge implements BadgeInterface
{

    /**
     * @return string
     */
    public function name()
    {
        return 'new badge';
    }
}
