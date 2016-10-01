<?php

namespace AwesomePatterns\ChainOfResponsibility;

/**
 * Class CpuChecker
 *
 * @package AwesomePatterns\ChainOfResponsibility
 */
class CpuChecker extends SystemChecker implements SystemCheckerInterface
{

    /**
     *
     */
    public function check()
    {
        echo "checking CPU" . PHP_EOL;

        $this->next();
    }
}
