<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait TrimEndTest
{

    public function testTrimEndWithString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::trimEnd('This is a test string')
        );
    }

    public function testTrimEndWhitespace(): void
    {
        $this->assertEquals(
            "\r\n This is a test string",
            Str::trimEnd("\r\n This is a test string \r\n")
        );
    }

    public function testTrimEndWithMask(): void
    {
        $this->assertEquals(
            '000123456',
            Str::trimEnd('000123456000', '0')
        );
    }

}
