<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait StartsWithTest
{

    public function testStartsWithWithMatch(): void
    {
        $this->assertTrue(
            Str::startsWith('This is a test string', 'This is a ')
        );
    }

    public function testStartsWithWithoutMatch(): void
    {
        $this->assertFalse(
            Str::startsWith('test string', 'This is a ')
        );
    }

    public function testStartsWithWithEmptyString(): void
    {
        $this->assertFalse(
            Str::startsWith('This is a test string', '')
        );
    }

}
