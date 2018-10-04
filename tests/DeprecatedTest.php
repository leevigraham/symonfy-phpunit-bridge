<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DeprecatedTest extends TestCase
{
    public function testDeprecatedCode()
    {
        @trigger_error('This "Foo" method is deprecated.', E_USER_DEPRECATED);
        @trigger_error('The second argument of the "Bar" method is deprecated.', E_USER_DEPRECATED);
    }
}
