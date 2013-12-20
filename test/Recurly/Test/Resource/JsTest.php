<?php
//
//namespace Recurly\Resource;
//
//use Recurly\Util\Client;
//
//class JsTest extends \PHPUnit_Framework_TestCase
//{
//    /** @var Client */
//    private $client;
//
//    public function setUp()
//    {
//        $this->client = $this->getMockBuilder('Recurly\Util\Client')
//            ->disableOriginalConstructor()
//            ->getMock();
//    }
//
//    public function testSign()
//    {
//        $js = new Js($this->client, 'bar');
//        $this->assertEquals('test', $js->sign(['foo'=>'baz']));
//
//    }
//
//}