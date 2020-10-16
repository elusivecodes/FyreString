<?php

namespace Tests;

use
    Fyre\Str;

trait KebabCaseTest
{

    public function testKebabCaseWithString(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebabCase('This is a test string')
        );
    }

    public function testKebabCaseWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebabCase('This is a test   string')
        );
    }

    public function testKebabCaseFromCamelCase(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebabCase('thisIsATestString')
        );
    }

    public function testKebabCaseFromPascalCase(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebabCase('ThisIsATestString')
        );
    }

    public function testKebabCaseFromSnakeCase(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebabCase('this_is_a_test_string')
        );
    }

    public function testKebabCaseWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::kebabCase('äëïöü')
        );
    }

}
