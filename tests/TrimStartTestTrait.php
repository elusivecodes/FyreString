<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Str;

trait TrimStartTestTrait
{

    public function testTrimStartWithString(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::trimStart('This is a test string')
        );
    }

    public function testTrimStartWhitespace(): void
    {
        $this->assertSame(
            "This is a test string \r\n",
            Str::trimStart("\r\n This is a test string \r\n")
        );
    }

    public function testTrimStartWithMask(): void
    {
        $this->assertSame(
            '123456000',
            Str::trimStart('000123456000', '0')
        );
    }

}
