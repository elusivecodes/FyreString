<?php

namespace Tests;

use
    Fyre\Str,
    InvalidArgumentException;

trait EscapeTest
{

    public function testEscapeWithString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::escape('This is a test string')
        );
    }

    public function testEscapeAmpersand(): void
    {
        $this->assertEquals(
            '&amp;',
            Str::escape('&')
        );
    }

    public function testEscapeDoubleQuote(): void
    {
        $this->assertEquals(
            '&quot;',
            Str::escape('"')
        );
    }

    public function testEscapeSingleQuote(): void
    {
        $this->assertEquals(
            '&apos;',
            Str::escape('\'')
        );
    }

    public function testEscapeLessThan(): void
    {
        $this->assertEquals(
            '&lt;',
            Str::escape('<')
        );
    }

    public function testEscapeGreaterThan(): void
    {
        $this->assertEquals(
            '&gt;',
            Str::escape('>')
        );
    }

}
