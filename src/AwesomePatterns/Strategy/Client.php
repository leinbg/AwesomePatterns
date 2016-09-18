<?php
namespace AwesomePatterns\Strategy;

class Client
{
	private $compressor;

	public function __construct(Compressable $compressor)
	{
		$this->compressor = $compressor;
	}

	public function compress($file)
	{
		return $this->compressor->handle($file);
	}
}