<?php

namespace Recurly\Test\Util;

use Recurly\Util\MethodHelper;

class MethodHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getters
     */
    public function testGetGetter($expected, $variable)
    {
        $this->assertEquals($expected, MethodHelper::getGetter($variable));
    }

    /**
     * @dataProvider setters
     */
    public function testGetSetter($expected, $variable)
    {
        $this->assertEquals($expected, MethodHelper::getSetter($variable));
    }

    public function getters()
    {
        return [
            ['getFoo', 'foo'],
            ['getFooBar', 'foo_bar'],
            ['getFooBarBaz', 'foo_bar_baz'],
        ];
    }

    public function setters()
    {
        return [
            ['setFoo', 'foo'],
            ['setFooBar', 'foo_bar'],
            ['setFooBarBaz', 'foo_bar_baz'],
        ];
    }
}