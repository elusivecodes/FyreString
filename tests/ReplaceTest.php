<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ReplaceTest
{

    public function testReplaceWithMatch(): void
    {
        $this->assertEquals(
            'This is a new string',
            Str::replace('This is a test string', 'test', 'new')
        );
    }

    public function testReplaceWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a new new string',
            Str::replace('This is a test test string', 'test', 'new')
        );
    }

    public function testReplaceWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replace('This is a test string', 'invalid', 'new')
        );
    }

    public function testReplaceWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replace('This is a test string', '', 'new')
        );
    }

}
