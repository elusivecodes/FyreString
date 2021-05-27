<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait LowerTest
{

    public function testLowerFromLowerCase(): void
    {
        $this->assertEquals(
            'this is a test string',
            Str::lower('this is a test string')
        );
    }

    public function testLowerFromUpperCase(): void
    {
        $this->assertEquals(
            'this is a test string',
            Str::lower('THIS IS A TEST STRING')
        );
    }

}
