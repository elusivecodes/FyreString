<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait SnakeTest
{

    public function testSnakeWithString(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snake('This is a test string')
        );
    }

    public function testSnakeWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snake('This is a test   string')
        );
    }

    public function testSnakeFromCamel(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snake('thisIsATestString')
        );
    }

    public function testSnakeFromKebab(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snake('this-is-a-test-string')
        );
    }

    public function testSnakeFromPascal(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::snake('ThisIsATestString')
        );
    }

    public function testSnakeWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::snake('äëïöü')
        );
    }

}
