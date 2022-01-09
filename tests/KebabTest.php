<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait KebabTest
{

    public function testKebabWithString(): void
    {
        $this->assertSame(
            'this-is-a-test-string',
            Str::kebab('This is a test string')
        );
    }

    public function testKebabWithConsecutiveSpaces(): void
    {
        $this->assertSame(
            'this-is-a-test-string',
            Str::kebab('This is a test   string')
        );
    }

    public function testKebabFromCamel(): void
    {
        $this->assertSame(
            'this-is-a-test-string',
            Str::kebab('thisIsATestString')
        );
    }

    public function testKebabFromPascal(): void
    {
        $this->assertSame(
            'this-is-a-test-string',
            Str::kebab('ThisIsATestString')
        );
    }

    public function testKebabFromSnake(): void
    {
        $this->assertSame(
            'this-is-a-test-string',
            Str::kebab('this_is_a_test_string')
        );
    }

    public function testKebabWithAccents(): void
    {
        $this->assertSame(
            'aeiou',
            Str::kebab('äëïöü')
        );
    }

}
