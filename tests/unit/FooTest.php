<?php

namespace test22032014\Test\Unit;

use PHPUnit_Framework_TestCase;

class FooTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testToString()
  {
	$foo = new test22032014\Foo;
	$result = $foo->toString();
	$expected = 'bar';
    $this->assertEqual($result, $expected);
  }
}
