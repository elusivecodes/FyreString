<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait BeforeTest
{

    public function testBeforeWithMatch(): void
    {
        $this->assertSame(
            'This is a',
            Str::before('This is a test string', ' test ')
        );
    }

    public function testBeforeWithMultipleMatches(): void
    {
        $this->assertSame(
            'This is a',
            Str::before('This is a test test string', ' test ')
        );
    }

    public function testBeforeWithoutMatch(): void
    {
        $this->assertSame(
            '',
            Str::before('This is a test string', 'invalid')
        );
    }

    public function testBeforeWithEmptySearch(): void
    {
        $this->assertSame(
            '',
            Str::before('This is a test string', '')
        );
    }

}
