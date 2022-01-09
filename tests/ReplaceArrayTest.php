<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ReplaceArrayTest
{

    public function testReplaceArrayWithMatch(): void
    {
        $this->assertSame(
            'This is a new string',
            Str::replaceArray('This is a test string', 'test', ['new'])
        );
    }

    public function testReplaceArrayWithMultipleMatches(): void
    {
        $this->assertSame(
            'This is a new different string',
            Str::replaceArray('This is a test test string', 'test', ['new', 'different'])
        );
    }

    public function testReplaceArrayWithMissingReplacements(): void
    {
        $this->assertSame(
            'This is a new  string',
            Str::replaceArray('This is a test test string', 'test', ['new'])
        );
    }

    public function testReplaceArrayWithExcessReplacements(): void
    {
        $this->assertSame(
            'This is a new string',
            Str::replaceArray('This is a test string', 'test', ['new', 'different'])
        );
    }

    public function testReplaceArrayWithoutMatch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::replaceArray('This is a test string', 'invalid', ['new'])
        );
    }

    public function testReplaceArrayWithEmptySearch(): void
    {
        $this->assertSame(
            'This is a test string',
            Str::replaceArray('This is a test string', '', ['new'])
        );
    }

}
