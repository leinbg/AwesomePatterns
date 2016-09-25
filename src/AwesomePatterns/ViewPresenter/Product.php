<?php

namespace AwesomePatterns\ViewPresenter;

/**
 * Model Class Product
 *
 * @package AwesomePatterns\ViewPresenter
 */
class Product implements PresentableInterface
{

    use PresentableTrait;

    /**
     * @var string
     */
    protected $name = 'dummy product';

    protected $presenterClass = 'AwesomePatterns\ViewPresenter\Presenters\Product';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
