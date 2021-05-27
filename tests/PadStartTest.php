<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait PadStartTest
{

    public function testPadStartAboveLength(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::padStart('This is a test string', 10)
        );
    }

    public function testPadStartBelowLength(): void
    {
        $this->assertEquals(
            '  This is a test string',
            Str::padStart('This is a test string', 23)
        );
    }

    public function testPadStartWithPadding(): void
    {
        $this->assertEquals(
            '__This is a test string',
            Str::padStart('This is a test string', 23, '_')
        );
    }

    public function testPadStartWithEmptyString(): void
    {
        $this->assertEquals(
            ' ',
            Str::padStart('', 1)
        );
    }

}
