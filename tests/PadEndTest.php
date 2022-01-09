<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait PadEndTest
{

    public function testPadEndAboveLength(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::padEnd('This is a test string', 10)
        );
    }

    public function testPadEndBelowLength(): void
    {
        $this->assertSame(
            'This is a test string  ',
            Str::padEnd('This is a test string', 23)
        );
    }

    public function testPadEndWithPadding(): void
    {
        $this->assertSame(
            'This is a test string__',
            Str::padEnd('This is a test string', 23, '_')
        );
    }

    public function testPadEndWithEmptyString(): void
    {
        $this->assertSame(
            ' ',
            Str::padEnd('', 1)
        );
    }

}
