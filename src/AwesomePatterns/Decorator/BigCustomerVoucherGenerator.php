<?php

namespace AwesomePatterns\Decorator;

/**
 * Class BigCustomerVoucherGenerator
 *
 * @package AwesomePatterns\Decorator
 */
class BigCustomerVoucherGenerator implements VoucherGeneratorInterface
{

    /**
     * @var VoucherGeneratorInterface
     */
    protected $voucherGenerator;

    /**
     * @var float
     */
    protected $bigCustomerDiscount = 0.1;

    /**
     * BigCustomerVoucherGenerator constructor.
     *
     * @param VoucherGeneratorInterface $voucherGenerator
     */
    public function __construct(VoucherGeneratorInterface $voucherGenerator)
    {
        $this->voucherGenerator = $voucherGenerator;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->bigCustomerDiscount + $this->voucherGenerator->getDiscount();
    }
}
