<?php

namespace Matriphe\Md5Hash;

use Illuminate\Contracts\Hashing\Hasher;

class Md5Hash implements Hasher
{
    /**
     * Hash the given value.
     *
     * @param  string $value
     * @param  array  $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        return hash('md5', $value);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string $value
     * @param  string $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        return $this->make($value, $options) === $hashedValue;
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }
}
