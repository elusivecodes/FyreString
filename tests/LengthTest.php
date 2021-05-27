<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait LengthTest
{

    public function testLengthWithString(): void
    {
        $this->assertEquals(
            21,
            Str::length('This is a test string')
        );
    }

    public function testLengthWithEmptyString(): void
    {
        $this->assertEquals(
            0,
            Str::length('')
        );
    }

}
