<?php

use AwesomePatterns\Decorator\BaseVoucherGenerator;
use AwesomePatterns\Decorator\NewsletterVoucherGenerator;
use AwesomePatterns\Decorator\BigCustomerVoucherGenerator;

class VoucherGeneratorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_get_basic_voucher_discount()
    {
        $voucherGenerator = new BaseVoucherGenerator;

        $this->assertEquals(0.03, $voucherGenerator->getDiscount());
    }

    /**
     * @test
     */
    public function it_get_newsletter_and_basic_voucher_discount()
    {
        $voucherGenerator = new NewsletterVoucherGenerator(new BaseVoucherGenerator);

        $this->assertEquals(0.08, $voucherGenerator->getDiscount());
    }

    /**
     * @test
     */
    public function it_get_big_customer_and_basic_voucher_discount()
    {
        $voucherGenerator = new BigCustomerVoucherGenerator(new BaseVoucherGenerator);

        $this->assertEquals(0.13, $voucherGenerator->getDiscount());
    }

    /**
     * @test
     */
    public function it_get_big_customer_and_newsletter_and_basic_voucher_discount()
    {
        $voucherGenerator = new BigCustomerVoucherGenerator(new NewsletterVoucherGenerator(new BaseVoucherGenerator));

        $this->assertEquals(0.18, $voucherGenerator->getDiscount());
    }
}
