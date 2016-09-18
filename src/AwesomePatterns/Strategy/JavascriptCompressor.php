<?php

namespace AwesomePatterns\Strategy;

class JavascriptCompressor implements Compressable
{
	public function handle($file)
	{
		if ($file !== 'javascript') {
			throw new \Exception("file type error.");	
		}

		return 'javascript compressed!';
	}
}