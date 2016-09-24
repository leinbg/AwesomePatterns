<?php

namespace AwesomePatterns\Decorator;

/**
 * Class NewsletterVoucherGenerator
 *
 * @package AwesomePatterns\Decorator
 */
class NewsletterVoucherGenerator implements VoucherGeneratorInterface
{

    /**
     * @var VoucherGeneratorInterface
     */
    protected $voucherGenerator;

    /**
     * @var float
     */
    protected $newsletterDiscount = 0.05;

    /**
     * NewsletterVoucherGenerator constructor.
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
        return $this->newsletterDiscount + $this->voucherGenerator->getDiscount();
    }
}
