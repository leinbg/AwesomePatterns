<?php

namespace AwesomePatterns\Decorator;

/**
 * Class BaseVoucherGenerator
 *
 * @package AwesomePatterns\Decorator
 */
class BaseVoucherGenerator implements VoucherGeneratorInterface
{

    /**
     * @var float
     */
    protected $baseDiscount = 0.03;

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->baseDiscount;
    }
}
