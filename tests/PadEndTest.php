<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait PadEndTest
{

    public function testPadEndAboveLength(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::padEnd('This is a test string', 10)
        );
    }

    public function testPadEndBelowLength(): void
    {
        $this->assertEquals(
            'This is a test string  ',
            Str::padEnd('This is a test string', 23)
        );
    }

    public function testPadEndWithPadding(): void
    {
        $this->assertEquals(
            'This is a test string__',
            Str::padEnd('This is a test string', 23, '_')
        );
    }

    public function testPadEndWithEmptyString(): void
    {
        $this->assertEquals(
            ' ',
            Str::padEnd('', 1)
        );
    }

}
