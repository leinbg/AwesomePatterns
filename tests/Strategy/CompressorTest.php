<?php

use AwesomePatterns\Strategy\Client;
use AwesomePatterns\Strategy\JavascriptCompressor;
use AwesomePatterns\Strategy\CssCompressor;

class CompressorTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function it_can_compress_css_using_css_compressor()
	{
		$oClient = new Client(new CssCompressor);
		$this->assertEquals('css compressed!', $oClient->compress('css'));
	}

	/**
	 * @test
	 * @expectedException Exception
	 * @expectedExceptionMessage file type error.
	 */
	public function it_can_not_compress_pdf_using_css_compressor()
	{
		$oClient = new Client(new CssCompressor);
		$oClient->compress('pdf');
	}

	/** @test */
	public function it_can_compress_javascript_using_javascript_compressor()
	{
		$oClient = new Client(new JavascriptCompressor);
		$this->assertEquals('javascript compressed!', $oClient->compress('javascript'));
	}

	/**
	 * @test
	 * @expectedException Exception
	 * @expectedExceptionMessage file type error.
	 */
	public function it_can_not_compress_pdf_using_javascript_compressor()
	{
		$oClient = new Client(new JavascriptCompressor);
		$oClient->compress('pdf');
	}
}