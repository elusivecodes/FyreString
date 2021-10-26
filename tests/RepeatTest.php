<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait RepeatTest
{

    public function testRepeatWithCount(): void
    {
        $this->assertEquals(
            'This is a test stringThis is a test stringThis is a test string',
            Str::repeat('This is a test string', 3)
        );
    }

    public function testRepeatZeroCount(): void
    {
        $this->assertEquals(
            '',
            Str::repeat('This is a test string', 0)
        );
    }

    public function testRepeatOneCount(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::repeat('This is a test string', 1)
        );
    }

    public function testRepeatWithEmptyString(): void
    {
        $this->assertEquals(
            '',
            Str::repeat('', 3)
        );
    }

}
