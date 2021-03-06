<?php

namespace Krixon\URL\Test\URL;

use Krixon\URL\QueryString;

class QueryStringTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $string
     * 
     * @dataProvider validQueryStringProvider
     */
    public function testCanCreateInstance($string)
    {
        try {
            $this->assertInstanceOf(QueryString::class, new QueryString($string));
        } catch (\InvalidArgumentException $e) {
            $this->fail("Cannot create query string instance from '$string'.");
        }
    }
    
    
    public function validQueryStringProvider()
    {
        return [
            ['foo=bar'],
            ['?foo=bar'],
            ['?foo=bar&bar=baz'],
        ];
    }
}
