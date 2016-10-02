<?php

namespace AwesomePatterns\Observer;

/**
 * Class SendNewsletterEmailHandler
 *
 * @package AwesomePatterns\Observer
 */
class SendNewsletterEmailHandler implements EventListener
{

    /**
     *
     */
    public function handle()
    {
        echo "send out newsletter emails"  . PHP_EOL;
    }
}
