<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait TrimTest
{

    public function testTrimWithString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::trim('This is a test string')
        );
    }

    public function testTrimWhitespace(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::trim("\r\n This is a test string \r\n")
        );
    }

    public function testTrimWithMask(): void
    {
        $this->assertEquals(
            '123456',
            Str::trim('000123456000', '0')
        );
    }

}
