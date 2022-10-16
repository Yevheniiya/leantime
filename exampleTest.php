<?php
use \PHPUnit\Framework\TestCase as TestCase;

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
    public function Hello(): string
    {
        return 'Hello World!';
    }

}
