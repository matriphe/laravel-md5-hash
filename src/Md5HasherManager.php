<?php

namespace Matriphe\Md5Hash;

use Illuminate\Hashing\HashManager;

class Md5HasherManager extends HashManager
{
	/**
	 * @return Md5Hasher
	 */
	public function createMd5Driver()
	{
		return new Md5Hasher();
	}

	/**
	 * Get the default driver name.
	 *
	 * @return string
	 */
	public function getDefaultDriver()
	{
		return Md5Hasher::ALGO;
	}
}