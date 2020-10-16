<?php

namespace Tests;

use
    Fyre\Str;

trait UpperTest
{

    public function testUpperFromLowerCase(): void
    {
        $this->assertEquals(
            'THIS IS A TEST STRING',
            Str::upper('this is a test string')
        );
    }

    public function testUpperFromUpperCase(): void
    {
        $this->assertEquals(
            'THIS IS A TEST STRING',
            Str::upper('THIS IS A TEST STRING')
        );
    }

}
