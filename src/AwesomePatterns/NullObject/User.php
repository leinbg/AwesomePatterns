<?php

namespace AwesomePatterns\NullObject;

/**
 * Class User
 *
 * @package AwesomePatterns\NullObject
 */
class User
{

    /**
     * @var string
     */
    public $name = 'real user';

    /**
     * @return string
     */
    public function getAddress()
    {
        return 'real address';
    }
}
