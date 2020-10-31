<?php

namespace Matriphe\Md5Hash;

use Illuminate\Contracts\Hashing\Hasher;

class Md5Hasher implements Hasher
{
    const ALGO = 'md5';

    /**
     * Get information about the given hashed value.
     *
     * @param  string $hashedValue
     * @return array
     */
    public function info($hashedValue)
    {
        return array_merge(
            password_get_info($hashedValue),
            ['algo' => self::ALGO, 'algoName' => self::ALGO]
        );
    }

    /**
     * Hash the given value.
     *
     * @param  string $value
     * @param  array  $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        return hash(self::ALGO, $value);
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
        return hash_equals($this->make($value, $options), $hashedValue);
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
