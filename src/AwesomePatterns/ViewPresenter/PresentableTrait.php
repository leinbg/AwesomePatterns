<?php

namespace AwesomePatterns\ViewPresenter;

/**
 * Class PresentableTrait
 *
 * @package AwesomePatterns\ViewPresenter
 */
trait PresentableTrait
{

    /**
     * @var
     */
    protected static $presenterInstance;

    /**
     * @return mixed
     * @throws \Exception
     */
    public function presenter()
    {
        if (isset($this->presenterClass) == false || class_exists($this->presenterClass) == false) {
            throw new \Exception('presenter class not exist');
        }

        if (isset(static::$presenterInstance) == false) {
            static::$presenterInstance = new $this->presenterClass($this);
        }

        return static::$presenterInstance;
    }
}
