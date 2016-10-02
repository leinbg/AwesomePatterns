<?php

namespace AwesomePatterns\Factory;

/**
 * Class BadgeFactory
 *
 * @package AwesomePatterns\Factory
 */
class BadgeFactory
{

    /**
     * @param $badge
     *
     * @return NewBadge|PreviewBadge|null
     */
    public function create($badge)
    {
        $badgeObject = null;

        if ($badge == 'new') {
            $badgeObject = new NewBadge();
        } elseif ($badge == 'preview') {
            $badgeObject = new PreviewBadge();
        }

        return $badgeObject;
    }
}
