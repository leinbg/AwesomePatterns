<?php

use AwesomePatterns\ViewPresenter\Product;

/**
 * Class ProductViewPresenterTest
 */
class ProductViewPresenterTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function it_get_product_name_from_model()
    {
        $product = new Product;

        $this->assertEquals('dummy product', $product->getName());
    }

    /**
     * @test
     */
    public function it_get_product_name_from_presenter_for_views()
    {
        $product = new Product;

        $this->assertEquals('DUMMY PRODUCT test', $product->presenter()->getName());
    }
}
