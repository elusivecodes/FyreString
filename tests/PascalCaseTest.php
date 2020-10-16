<?php

namespace Tests;

use
    Fyre\Str;

trait PascalCaseTest
{

    public function testPascalCaseWithString(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascalCase('This is a test string')
        );
    }

    public function testPascalCaseWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascalCase('This is a test string')
        );
    }

    public function testPascalCaseFromCamelCase(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascalCase('thisIsATestString')
        );
    }

    public function testPascalCaseFromKebabCase(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascalCase('this-is-a-test-string')
        );
    }

    public function testPascalCaseFromSnakeCase(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascalCase('this_is_a_test_string')
        );
    }

    public function testPascalCaseWithAccents(): void
    {
        $this->assertEquals(
            'Aeiou',
            Str::pascalCase('äëïöü')
        );
    }

}
