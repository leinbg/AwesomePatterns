<?php

namespace AwesomePatterns\ViewPresenter\Presenters;

/**
 * Class Product
 *
 * @package AwesomePatterns\ViewPresenter\Presenters
 */
class Product
{

    /**
     * @var
     */
    private $entity;

    /**
     * Product constructor.
     *
     * @param $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return strtoupper($this->entity->getName()) . ' test';
    }
}
