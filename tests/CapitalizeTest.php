<?php

namespace Tests;

use
    Fyre\Str;

trait CapitalizeTest
{

    public function testCapitalizeFromLowerCase(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::capitalize('this is a test string')
        );
    }

    public function testCapitalizeFromUppercase(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::capitalize('THIS IS A TEST STRING')
        );
    }

}
