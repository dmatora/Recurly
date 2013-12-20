<?php

namespace Recurly\Test\Util;

use Recurly\Util\Hasher;

class HasherTest extends \PHPUnit_Framework_TestCase
{

    public function testHash()
    {
        $this->assertEquals('85d155c55ed286a300bd1cf124de08d87e914f3a', Hasher::hash('foo', 'bar'));
    }
} 