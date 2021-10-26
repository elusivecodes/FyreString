<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait EndsWithTest
{

    public function testEndsWithWithMatch(): void
    {
        $this->assertTrue(
            Str::endsWith('This is a test string', ' a test string')
        );
    }

    public function testEndsWithWithoutMatch(): void
    {
        $this->assertFalse(
            Str::endsWith('This is a ', 'test string')
        );
    }

    public function testEndsWithWithEmptyString(): void
    {
        $this->assertFalse(
            Str::endsWith('This is a test string', '')
        );
    }

}
