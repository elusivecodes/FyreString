<?php

namespace Tests;

use
    Fyre\Str;

trait CamelTest
{

    public function testCamelWithString(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camel('This is a test string')
        );
    }

    public function testCamelWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camel('This is a test   string')
        );
    }

    public function testCamelFromKebab(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camel('this-is-a-test-string')
        );
    }

    public function testCamelFromPascal(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camel('ThisIsATestString')
        );
    }

    public function testCamelFromSnake(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camel('this_is_a_test_string')
        );
    }

    public function testCamelWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::camel('äëïöü')
        );
    }

}
