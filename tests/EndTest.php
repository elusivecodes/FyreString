<?php

namespace Tests;

use
    Fyre\Str;

trait EndTest
{

    public function testEndWithMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::end('This is a test string', ' a test string')
        );
    }

    public function testEndWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::end('This is a ', 'test string')
        );
    }

    public function testEndWithEmptyString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::end('This is a test string', '')
        );
    }

}
