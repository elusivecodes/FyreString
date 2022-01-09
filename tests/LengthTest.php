<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait LengthTest
{

    public function testLengthWithString(): void
    {
        $this->assertSame(
            21,
            Str::length('This is a test string')
        );
    }

    public function testLengthWithEmptyString(): void
    {
        $this->assertSame(
            0,
            Str::length('')
        );
    }

}
