<?php

namespace Matriphe\Md5Hash\Test;

use Illuminate\Support\Facades\Hash;
use Orchestra\Testbench\TestCase;

class LaravelHashTest extends TestCase
{
    public function passwordHash()
    {
        return [
            ['password', '5f4dcc3b5aa765d61d8327deb882cf99'],
        ];
    }

    /**
     * @dataProvider passwordHash
     */
    public function test_hash_make_returns_md5_hash(string $word, string $expected)
    {
        $this->assertEquals(Hash::make($word), $expected);
    }

    /**
     * @dataProvider passwordHash
     */
    public function test_bcrypt_returns_md5_hash(string $word, string $expected)
    {
        $this->assertEquals(bcrypt($word), $expected);
    }

    protected function getPackageProviders($app)
    {
        return [
            'Matriphe\Md5Hash\HashServiceProvider',
        ];
    }
}
