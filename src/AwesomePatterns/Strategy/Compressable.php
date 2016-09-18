<?php

namespace AwesomePatterns\Strategy;

interface Compressable
{
	public function handle($file);
}