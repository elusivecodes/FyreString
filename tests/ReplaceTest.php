<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ReplaceTest
{

    public function testReplaceWithMatch(): void
    {
        $this->assertSame(
            'This is a new string',
            Str::replace('This is a test string', 'test', 'new')
        );
    }

    public function testReplaceWithMultipleMatches(): void
    {
        $this->assertSame(
            'This is a new new string',
            Str::replace('This is a test test string', 'test', 'new')
        );
    }

    public function testReplaceWithoutMatch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::replace('This is a test string', 'invalid', 'new')
        );
    }

    public function testReplaceWithEmptySearch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::replace('This is a test string', '', 'new')
        );
    }

}
