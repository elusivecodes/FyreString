<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait TrimStartTest
{

    public function testTrimStartWithString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::trimStart('This is a test string')
        );
    }

    public function testTrimStartWhitespace(): void
    {
        $this->assertEquals(
            "This is a test string \r\n",
            Str::trimStart("\r\n This is a test string \r\n")
        );
    }

    public function testTrimStartWithMask(): void
    {
        $this->assertEquals(
            '123456000',
            Str::trimStart('000123456000', '0')
        );
    }

}
