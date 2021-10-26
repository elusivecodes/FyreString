<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait AfterTest
{

    public function testAfterWithMatch(): void
    {
        $this->assertEquals(
            'string',
            Str::after('This is a test string', ' test ')
        );
    }

    public function testAfterWithMultipleMatches(): void
    {
        $this->assertEquals(
            'test string',
            Str::after('This is a test test string', ' test ')
        );
    }

    public function testAfterWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::after('This is a test string', 'invalid')
        );
    }

    public function testAfterWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::after('This is a test string', '')
        );
    }

}
