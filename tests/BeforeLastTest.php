<?php

namespace Tests;

use
    Fyre\Str;

trait BeforeLastTest
{

    public function testBeforeLastWithMatch(): void
    {
        $this->assertEquals(
            'This is a',
            Str::beforeLast('This is a test string', ' test ')
        );
    }

    public function testBeforeLastWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a test',
            Str::beforeLast('This is a test test string', ' test ')
        );
    }

    public function testBeforeLastWithoutMatch(): void
    {
        $this->assertEquals(
            '',
            Str::beforeLast('This is a test string', 'invalid')
        );
    }

    public function testBeforeLastWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::beforeLast('This is a test string', '')
        );
    }

}
