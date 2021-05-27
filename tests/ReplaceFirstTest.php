<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ReplaceFirstTest
{

    public function testReplaceFirstWithMatch(): void
    {
        $this->assertEquals(
            'This is a new string',
            Str::replaceFirst('This is a test string', 'test', 'new')
        );
    }

    public function testReplaceFirstWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a new test string',
            Str::replaceFirst('This is a test test string', 'test', 'new')
        );
    }

    public function testReplaceFirstWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceFirst('This is a test string', 'invalid', 'new')
        );
    }

    public function testReplaceFirstWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceFirst('This is a test string', '', 'new')
        );
    }

}
