<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait KebabTest
{

    public function testKebabWithString(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebab('This is a test string')
        );
    }

    public function testKebabWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebab('This is a test   string')
        );
    }

    public function testKebabFromCamel(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebab('thisIsATestString')
        );
    }

    public function testKebabFromPascal(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebab('ThisIsATestString')
        );
    }

    public function testKebabFromSnake(): void
    {
        $this->assertEquals(
            'this-is-a-test-string',
            Str::kebab('this_is_a_test_string')
        );
    }

    public function testKebabWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::kebab('äëïöü')
        );
    }

}
