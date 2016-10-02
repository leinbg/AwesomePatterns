<?php

namespace AwesomePatterns\NullObject;

/**
 * Class NullUser
 *
 * @package AwesomePatterns\NullObject
 */
class NullUser extends User
{

    /**
     * @var string
     */
    public $name = '';

    /**
     * @return string
     */
    public function getAddress()
    {
        return '';
    }
}
