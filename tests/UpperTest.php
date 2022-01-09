<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait UpperTest
{

    public function testUpperFromLowerCase(): void
    {
        $this->assertSame(
            'THIS IS A TEST STRING',
            Str::upper('this is a test string')
        );
    }

    public function testUpperFromUpperCase(): void
    {
        $this->assertSame(
            'THIS IS A TEST STRING',
            Str::upper('THIS IS A TEST STRING')
        );
    }

}
