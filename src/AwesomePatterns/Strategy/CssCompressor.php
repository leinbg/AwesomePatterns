<?php

namespace AwesomePatterns\Strategy;

class CssCompressor implements Compressable
{
	public function handle($file)
	{
		if ($file !== 'css') {
			throw new \Exception('file type error.');
		}

		return 'css compressed!';
	}
}