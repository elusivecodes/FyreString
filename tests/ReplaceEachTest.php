<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ReplaceEachTest
{

    public function testReplaceEachWithMatches(): void
    {
        $this->assertEquals(
            'This is a new phrase',
            Str::replaceEach('This is a test string', [
                'test' => 'new',
                'string' => 'phrase'
            ])
        );
    }

    public function testReplaceEachWithMultipleMatches(): void
    {
        $this->assertEquals(
            'This is a new new phrase',
            Str::replaceEach('This is a test test string', [
                'test' => 'new',
                'string' => 'phrase'
            ])
        );
    }

    public function testReplaceEachWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::replaceEach('This is a test string', [
                'invalid' => 'new',
                'sentence' => 'phrase'
            ])
        );
    }

}
