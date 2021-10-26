<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait IsStringTest
{

    public function testIsString(): void
    {
        $this->assertTrue(
            Str::isString('This is a test string')
        );
    }

    public function testIsStringArray(): void
    {
        $this->assertFalse(
            Str::isString([1, 2, 3])
        );
    }

    public function testIsStringBoolean(): void
    {
        $this->assertFalse(
            Str::isString(true)
        );
    }

    public function testIsStringInt(): void
    {
        $this->assertFalse(
            Str::isString(123)
        );
    }

    public function testIsStringFloat(): void
    {
        $this->assertFalse(
            Str::isString(123.456)
        );
    }

    public function testIsStringNull(): void
    {
        $this->assertFalse(
            Str::isString(null)
        );
    }

}
