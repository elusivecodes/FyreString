<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait AfterLastTest
{

    public function testAfterLastWithMatch(): void
    {
        $this->assertSame(
            'string',
            Str::afterLast('This is a test string', ' test ')
        );
    }

    public function testAfterLastWithMultipleMatches(): void
    {
        $this->assertSame(
            'string',
            Str::afterLast('This is a test test string', ' test ')
        );
    }

    public function testAfterLastWithoutMatch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::afterLast('This is a test string', 'invalid')
        );
    }

    public function testAfterLastWithEmptySearch(): void
    {
        $this->assertSame(
            '',
            Str::afterLast('This is a test string', '')
        );
    }

}
