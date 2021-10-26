<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait IndexOfTest
{

    public function testIndexOfWithMatch(): void
    {
        $this->assertEquals(
            9,
            Str::indexOf('This is a test string', ' test ')
        );
    }

    public function testIndexOfWithMultipleMatches(): void
    {
        $this->assertEquals(
            9,
            Str::indexOf('This is a test test string', ' test ')
        );
    }

    public function testIndexOfWithoutMatch(): void
    {
        $this->assertEquals(
            -1,
            Str::indexOf('This is a test string', 'invalid')
        );
    }

    public function testIndexOfWithPositiveStart(): void
    {
        $this->assertEquals(
            14,
            Str::indexOf('This is a test test string', ' test ', 10)
        );
    }

    public function testIndexOfWithNegativeStart(): void
    {
        $this->assertEquals(
            14,
            Str::indexOf('This is a test test string', ' test ', -13)
        );
    }

    public function testIndexOfWithEmptySearch(): void
    {
        $this->assertEquals(
            0,
            Str::indexOf('This is a test string', '')
        );
    }

}
