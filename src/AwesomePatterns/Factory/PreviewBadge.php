<?php

namespace AwesomePatterns\Factory;

/**
 * Class PreviewBadge
 *
 * @package AwesomePatterns\Factory
 */
class PreviewBadge implements BadgeInterface
{

    /**
     * @return string
     */
    public function name()
    {
        return 'preview badge';
    }
}
