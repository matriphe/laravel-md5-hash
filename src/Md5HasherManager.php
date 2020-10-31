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
}