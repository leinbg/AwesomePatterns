<?php

namespace AwesomePatterns\Observer;

/**
 * Interface EventDispatcher
 *
 * @package AwesomePatterns\Observer
 */
interface EventDispatcher
{

    /**
     * @param $listeners
     *
     * @return mixed
     */
    public function attach($listeners);

    /**
     * @param EventListener $listener
     *
     * @return mixed
     */
    public function detach(EventListener $listener);

    /**
     * @return mixed
     */
    public function fire();
}
