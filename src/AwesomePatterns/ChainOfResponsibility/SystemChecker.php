<?php

namespace AwesomePatterns\ChainOfResponsibility;

/**
 * Class SystemChecker
 *
 * @package AwesomePatterns\ChainOfResponsibility
 */
abstract class SystemChecker implements SystemCheckerInterface
{

    /**
     * @var SystemCheckerInterface
     */
    private $checker;

    /**
     * @param $checker
     */
    public function setNextChecker($checker)
    {
        $this->checker = $checker;
    }

    /**
     *
     */
    public function next()
    {
        if ($this->checker) {
            $this->checker->check();
        }
    }

    /**
     * @return mixed
     */
    abstract public function check();
}
