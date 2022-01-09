<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait PascalTest
{

    public function testPascalWithString(): void
    {
        $this->assertSame(
            'ThisIsATestString',
            Str::pascal('This is a test string')
        );
    }

    public function testPascalWithConsecutiveSpaces(): void
    {
        $this->assertSame(
            'ThisIsATestString',
            Str::pascal('This is a test string')
        );
    }

    public function testPascalFromCamel(): void
    {
        $this->assertSame(
            'ThisIsATestString',
            Str::pascal('thisIsATestString')
        );
    }

    public function testPascalFromKebab(): void
    {
        $this->assertSame(
            'ThisIsATestString',
            Str::pascal('this-is-a-test-string')
        );
    }

    public function testPascalFromSnake(): void
    {
        $this->assertSame(
            'ThisIsATestString',
            Str::pascal('this_is_a_test_string')
        );
    }

    public function testPascalWithAccents(): void
    {
        $this->assertSame(
            'Aeiou',
            Str::pascal('äëïöü')
        );
    }

}
