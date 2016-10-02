<?php

namespace AwesomePatterns\Observer;

/**
 * Class UpdateNewsletterDatabaseHandler
 *
 * @package AwesomePatterns\Observer
 */
class UpdateNewsletterDatabaseHandler implements EventListener
{

    /**
     *
     */
    public function handle()
    {
        echo "persist data in newsletter database" . PHP_EOL;
    }
}
