<?php

namespace AwesomePatterns\ChainOfResponsibility;

/**
 * Class IoChecker
 *
 * @package AwesomePatterns\ChainOfResponsibility
 */
class IoChecker extends SystemChecker implements SystemCheckerInterface
{

    /**
     *
     */
    public function check()
    {
        echo "checking IO" . PHP_EOL;

        $this->next();
    }
}
