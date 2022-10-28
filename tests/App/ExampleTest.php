<?php

namespace Test\App;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSuccess() :void
    {
        $example = new Example();
        $result = $example->foo();
        self::assertEquals(42, $result);
    }
}
