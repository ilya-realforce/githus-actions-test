<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{
    public function testDummy()
    {
        $test = new \stdClass();
        $test2 = $test;
        $this->assertSame($test, $test2);
    }

    public function testMoreDummy()
    {
        $this->assertEquals('test', 'test');
    }

    public function testDummiest()
    {
        $this->assertTrue(true);
    }
}
