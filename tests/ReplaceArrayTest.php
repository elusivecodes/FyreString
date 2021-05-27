<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ReplaceArrayTest
{

    public function testReplaceArrayWithMatch(): void
    {
        $this->assertEquals(
            'This is a new string',
            Str::replaceArray('This is a test string', 'test', ['new'])
        );
    }

    public function testReplaceArrayWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a new different string',
            Str::replaceArray('This is a test test string', 'test', ['new', 'different'])
        );
    }

    public function testReplaceArrayWithMissingReplacements(): void
    {
        $this->assertEquals(
            'This is a new  string',
            Str::replaceArray('This is a test test string', 'test', ['new'])
        );
    }

    public function testReplaceArrayWithExcessReplacements(): void
    {
        $this->assertEquals(
            'This is a new string',
            Str::replaceArray('This is a test string', 'test', ['new', 'different'])
        );
    }

    public function testReplaceArrayWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceArray('This is a test string', 'invalid', ['new'])
        );
    }

    public function testReplaceArrayWithEmptySearch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceArray('This is a test string', '', ['new'])
        );
    }

}
