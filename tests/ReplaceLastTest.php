<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ReplaceLastTest
{

    public function testReplaceLastWithMatch(): void
    {
        $this->assertEquals(
            'This is a new string',
            Str::replaceLast('This is a test string', 'test', 'new')
        );
    }

    public function testReplaceLastWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a test new string',
            Str::replaceLast('This is a test test string', 'test', 'new')
        );
    }

    public function testReplaceLastWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceLast('This is a test string', 'invalid', 'new')
        );
    }

    public function testReplaceLastWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceLast('This is a test string', '', 'new')
        );
    }

}
