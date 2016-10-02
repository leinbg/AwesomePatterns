<?php

namespace AwesomePatterns\Observer;

/**
 * Interface EventListener
 *
 * @package AwesomePatterns\Observer
 */
interface EventListener
{

    /**
     * @return mixed
     */
    public function handle();
}
