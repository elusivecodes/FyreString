<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait PadTest
{

    public function testPadAboveLength(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::pad('This is a test string', 10)
        );
    }

    public function testPadBelowLength(): void
    {
        $this->assertSame(
            '  This is a test string  ',
            Str::pad('This is a test string', 25)
        );
    }

    public function testPadWithPadding(): void
    {
        $this->assertSame(
            '__This is a test string__',
            Str::pad('This is a test string', 25, '_')
        );
    }

    public function testPadWithEmptyString(): void
    {
        $this->assertSame(
            ' ',
            Str::pad('', 1)
        );
    }

}
