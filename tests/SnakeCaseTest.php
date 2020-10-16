<?php

namespace Tests;

use
    Fyre\Str;

trait SnakeCaseTest
{

    public function testSnakeCaseWithString(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snakeCase('This is a test string')
        );
    }

    public function testSnakeCaseWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snakeCase('This is a test   string')
        );
    }

    public function testSnakeCaseFromCamelCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snakeCase('thisIsATestString')
        );
    }

    public function testSnakeCaseFromKebabCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snakeCase('this-is-a-test-string')
        );
    }

    public function testSnakeCaseFromPascalCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snakeCase('ThisIsATestString')
        );
    }

    public function testSnakeCaseWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::snakeCase('äëïöü')
        );
    }

}
