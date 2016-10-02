<?php

namespace AwesomePatterns\Observer;

use InvalidArgumentException;

/**
 * Class NewsletterSubscriber
 *
 * @package AwesomePatterns\Observer
 */
class NewsletterSubscriber implements EventDispatcher
{

    /**
     * @var
     */
    protected $eventListeners;

    /**
     * @param $listeners
     *
     * @return $this
     */
    public function attach($listeners)
    {
        if (is_array($listeners)) {
            foreach ($listeners as $listener) {
                $this->attachEventListeners($listener);
            }

            return $this;
        }

        $this->attachEventListeners($listeners);

        return $this;
    }

    /**
     * @param EventListener $listener
     *
     * @return $this
     */
    public function detach(EventListener $listener)
    {
        unlink($this->eventListeners[get_class($listener)]);

        return $this;
    }

    /**
     *
     */
    public function fire()
    {
        /** @var EventListener $listener */
        foreach ($this->eventListeners as $listener) {
            $listener->handle();
        }
    }

    /**
     * @param mixed $listener
     */
    public function attachEventListeners($listener)
    {
        if ($listener instanceof EventListener == false) {
            throw new \InvalidArgumentException('listener not implement EventListener interface.');
        }

        $this->eventListeners[] = $listener;
    }
}
