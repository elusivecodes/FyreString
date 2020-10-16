<?php

namespace Tests;

use
    Fyre\Str;

trait AfterLastTest
{

    public function testAfterLastWithMatch(): void
    {
        $this->assertEquals(
            'string',
            Str::afterLast('This is a test string', ' test ')
        );
    }

    public function testAfterLastWithMultipleMatches(): void
    {
        $this->assertEquals(
            'string',
            Str::afterLast('This is a test test string', ' test ')
        );
    }

    public function testAfterLastWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::afterLast('This is a test string', 'invalid')
        );
    }

    public function testAfterLastWithEmptySearch(): void
    {
        $this->assertEquals(
            '',
            Str::afterLast('This is a test string', '')
        );
    }

}
