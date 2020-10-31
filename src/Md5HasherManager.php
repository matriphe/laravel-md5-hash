<?php

namespace Matriphe\Md5Hash;

use Illuminate\Hashing\HashManager;

class Md5HasherManager extends HashManager
{
    /**
     * Create an instance of the MD5 hash Driver.
     *
     * @return Md5Hasher
     */
    public function createMd5Driver()
    {
        return new Md5Hasher();
    }

    /**
     * Get the default driver name, always return MD5.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return Md5Hasher::ALGO;
    }

    /**
     * Get a driver instance, overwrite to MD5.
     *
     * @param  string $driver
     * @return mixed
     */
    public function driver($driver = null)
    {
        return parent::driver($this->getDefaultDriver());
    }
}
