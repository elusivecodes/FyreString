<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait EscapeTest
{

    public function testEscapeWithString(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::escape('This is a test string')
        );
    }

    public function testEscapeAmpersand(): void
    {
        $this->assertSame(
            '&amp;',
            Str::escape('&')
        );
    }

    public function testEscapeDoubleQuote(): void
    {
        $this->assertSame(
            '&quot;',
            Str::escape('"')
        );
    }

    public function testEscapeSingleQuote(): void
    {
        $this->assertSame(
            '&apos;',
            Str::escape('\'')
        );
    }

    public function testEscapeLessThan(): void
    {
        $this->assertSame(
            '&lt;',
            Str::escape('<')
        );
    }

    public function testEscapeGreaterThan(): void
    {
        $this->assertSame(
            '&gt;',
            Str::escape('>')
        );
    }

}
