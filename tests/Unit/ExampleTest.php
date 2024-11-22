<?php

use PHPUnit\Framework\TestCase;
use GabrielSoaresMaciel\AwsSdkPhpMock\Example;

class ExampleTest extends TestCase
{
    public function test_example(): void
    {
        $example  = new Example();

        $output = $example->hello('Gabriel');

        $this->assertEquals('Hello Gabriel', $output);
    }
}
