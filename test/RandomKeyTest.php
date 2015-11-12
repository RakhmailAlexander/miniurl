<?php
require '../vendor/autoload.php';
class RandomKeyTest extends PHPUnit_Framework_TestCase
{
    public $random;
    public function setUp()
    {
        $this->random = new RandomKey;
    }
    public function tearDown()
    {
        unset($this->random);
    }
    public function testUserRandomUrl()
    {
        $this->assertNotEmpty($this->random->getSymbols());
    }
    public function testUserRandomUrlType()
    {
        $this->assertTrue(is_string($this->random->getSymbols()));
    }
    public function testUserRandomUrlLenght()
    {
        $this->assertEquals(4, strlen($this->random->getSymbols()));
    }
}