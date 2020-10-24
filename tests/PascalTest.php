<?php

namespace Tests;

use
    Fyre\Str;

trait PascalTest
{

    public function testPascalWithString(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascal('This is a test string')
        );
    }

    public function testPascalWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascal('This is a test string')
        );
    }

    public function testPascalFromCamel(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascal('thisIsATestString')
        );
    }

    public function testPascalFromKebab(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascal('this-is-a-test-string')
        );
    }

    public function testPascalFromSnake(): void
    {
        $this->assertEquals(
            'ThisIsATestString',
            Str::pascal('this_is_a_test_string')
        );
    }

    public function testPascalWithAccents(): void
    {
        $this->assertEquals(
            'Aeiou',
            Str::pascal('äëïöü')
        );
    }

}
