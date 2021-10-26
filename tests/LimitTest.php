<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait LimitTest
{

    public function testLimitNotReached(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::limit('This is a test string')
        );
    }

    public function testLimitExceeded(): void
    {
        $this->assertEquals(
            'This is a test string that is designed specifically to contain enough words to go above the default ...',
            Str::limit('This is a test string that is designed specifically to contain enough words to go above the default limit of 100 characters.')
        );
    }

    public function testLimitWithLimit(): void
    {
        $this->assertEquals(
            'This is a ...',
            Str::limit('This is a test string', 10)
        );
    }

    public function testLimitWithAppend(): void
    {
        $this->assertEquals(
            'This is a _',
            Str::limit('This is a test string', 10, '_')
        );
    }

}
