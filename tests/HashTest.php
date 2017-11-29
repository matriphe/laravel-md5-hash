<?php

namespace Matriphe\Md5Hash\Test;

use Matriphe\Md5Hash\Md5Hash;
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->hash = new Md5Hash();
    }

    /**
     * @test
     */
    public function make_function_returns_correct_md5_hashed_value()
    {
        $this->assertSame(md5('matriphe'), $this->hash->make('matriphe'));
    }

    /**
     * @test
     */
    public function check_function_returns_correct_value()
    {
        $this->assertTrue($this->hash->check('matriphe', md5('matriphe')));
        $this->assertFalse($this->hash->check('zamroni', md5('matriphe')));
    }

    /**
     * @test
     */
    public function needsRehash_function_returns_false()
    {
        $this->assertFalse($this->hash->needsRehash(md5('matriphe')));
    }
}
