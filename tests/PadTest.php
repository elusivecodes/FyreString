<?php

namespace Tests;

use
    Fyre\Str;

trait PadTest
{

    public function testPadAboveLength(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::pad('This is a test string', 10)
        );
    }

    public function testPadBelowLength(): void
    {
        $this->assertEquals(
            '  This is a test string  ',
            Str::pad('This is a test string', 25)
        );
    }

    public function testPadWithPadding(): void
    {
        $this->assertEquals(
            '__This is a test string__',
            Str::pad('This is a test string', 25, '_')
        );
    }

    public function testPadWithEmptyString(): void
    {
        $this->assertEquals(
            ' ',
            Str::pad('', 1)
        );
    }

}
