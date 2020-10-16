<?php

namespace Tests;

use
    Fyre\Str;

trait CamelCaseTest
{

    public function testCamelCaseWithString(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camelCase('This is a test string')
        );
    }

    public function testCamelCaseWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camelCase('This is a test   string')
        );
    }

    public function testCamelCaseFromKebabCase(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camelCase('this-is-a-test-string')
        );
    }

    public function testCamelCaseFromPascalCase(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camelCase('ThisIsATestString')
        );
    }

    public function testCamelCaseFromSnakeCase(): void
    {
        $this->assertEquals(
            'thisIsATestString',
            Str::camelCase('this_is_a_test_string')
        );
    }

    public function testCamelCaseWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::camelCase('äëïöü')
        );
    }

}
