<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait AfterTest
{

    public function testAfterWithMatch(): void
    {
        $this->assertSame(
            'string',
            Str::after('This is a test string', ' test ')
        );
    }

    public function testAfterWithMultipleMatches(): void
    {
        $this->assertSame(
            'test string',
            Str::after('This is a test test string', ' test ')
        );
    }

    public function testAfterWithoutMatch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::after('This is a test string', 'invalid')
        );
    }

    public function testAfterWithEmptySearch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::after('This is a test string', '')
        );
    }

}
