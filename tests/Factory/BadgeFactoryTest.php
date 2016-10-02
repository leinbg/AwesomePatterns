<?php

use AwesomePatterns\Factory\BadgeFactory;

/**
 * Class BadgeFactoryTest
 */
class BadgeFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_create_new_badge_by_factory()
    {
        $factory = new BadgeFactory;
        $newBadge = $factory->create('new');

        $this->assertEquals('new badge', $newBadge->name());
    }

    /**
     * @test
     */
    public function it_create_preview_badge_by_factory()
    {
        $factory = new BadgeFactory;
        $previewBadge = $factory->create('preview');

        $this->assertEquals('preview badge', $previewBadge->name());
    }
}
