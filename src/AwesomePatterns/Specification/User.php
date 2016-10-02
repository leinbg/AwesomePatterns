<?php

namespace AwesomePatterns\Specification;

/**
 * Class User
 *
 * @package AwesomePatterns\Specification
 */
class User
{

    /**
     * @var
     */
    protected $emailLevel;

    /**
     * @var
     */
    protected $domainLevel;

    /**
     * User constructor.
     *
     * @param $emailLevel 1 = 'gold' 2 = 'silver'
     * @param $domainLevel 1 = 'gold' 2 = 'silver'
     */
    public function __construct($emailLevel, $domainLevel)
    {
        $this->emailLevel = $emailLevel;
        $this->domainLevel = $domainLevel;
    }

    /**
     * @return mixed
     */
    public function getEmailLevel()
    {
        return $this->emailLevel;
    }

    /**
     * @return mixed
     */
    public function getDomainLevel()
    {
        return $this->domainLevel;
    }
}
