<?php

namespace Matriphe\Md5Hash\Test;

use Illuminate\Contracts\Hashing\Hasher;
use Matriphe\Md5Hash\Md5Hasher;
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase
{
    /**
     * @var Hasher
     */
    private $hash;

    public function setUp(): void
    {
        parent::setUp();

        $this->hash = new Md5Hasher();
    }

    public function test_make_function_returns_correct_md5_hashed_value()
    {
        $this->assertSame(md5('matriphe'), $this->hash->make('matriphe'));
    }

    public function test_check_function_returns_correct_value()
    {
        $this->assertTrue($this->hash->check('matriphe', md5('matriphe')));
        $this->assertFalse($this->hash->check('zamroni', md5('matriphe')));
    }

    public function test_needsRehash_function_returns_false()
    {
        $this->assertFalse($this->hash->needsRehash(md5('matriphe')));
    }

    public function test_info_function_returns_an_array()
    {
        $this->assertEquals(
            [
                'algo' => 'md5',
                'algoName' => 'md5',
                'options' => [],
            ],
            $this->hash->info('matriphe')
        );
    }
}
