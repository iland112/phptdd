<?php

namespace App\Tests\Unit;

use App\Speaker;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    /**
     * @param \Closure $func
     * @param string $expected
     * @dataProvider provideHelloStrings
     */
    public function testCanSayHello(\Closure $func, string $expected)
    {
        $speaker = new Speaker();
        $helloMessage = $speaker->sayHello($func);

        $this->assertEquals($expected, $helloMessage);
    }

    /**
     * @return array[]
     */
    private function provideHelloStrings(): array
    {
        return [
            [function($str) { return ucfirst($str); }, 'Hello'],
            [function($str) { return strtolower($str); }, 'hello'],
            [function($str) { return strtoupper($str); }, 'HELLO'],
        ];
    }
}