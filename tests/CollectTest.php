<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testCount()
    {
        $collect = new Collect\Collect([13,17]);
        $this->assertSame(2, $collect->count());
    }

    public function testPush()
    {
        $collect = new \Collect\Collect(['a' => 13]);
        $collect->push(17, 'b');
        $this->assertSame(['a' => 13, 'b' => 17], $collect->toArray());
    }

    public function testUnshift()
    {
        $collect = new \Collect\Collect(['a' => 13]);
        $collect->unshift(10);
        $this->assertSame([0 => 10, 'a' => 13], $collect->toArray());
    }

    public function testShift()
    {
        $collect = new \Collect\Collect(['a' => 13, 'b' => 17]);
        $collect->shift();
        $this->assertSame(['b' => 17], $collect->toArray());
    }
}
