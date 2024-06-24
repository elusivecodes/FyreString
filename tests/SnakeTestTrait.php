<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Str;

trait SnakeTestTrait
{
    public function testSnakeFromCamel(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::snake('thisIsATestString')
        );
    }

    public function testSnakeFromKebab(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::snake('this-is-a-test-string')
        );
    }

    public function testSnakeFromPascal(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::snake('ThisIsATestString')
        );
    }

    public function testSnakeWithAccents(): void
    {
        $this->assertSame(
            'aeiou',
            Str::snake('äëïöü')
        );
    }

    public function testSnakeWithConsecutiveSpaces(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::snake('This is a test   string')
        );
    }

    public function testSnakeWithString(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::snake('This is a test string')
        );
    }
}
