<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait LastIndexOfTest
{

    public function testLastIndexOfWithMatch(): void
    {
        $this->assertEquals(
            9,
            Str::lastIndexOf('This is a test string', ' test ')
        );
    }

    public function testLastIndexOfWithMultipleMatches(): void
    {
        $this->assertEquals(
            14,
            Str::lastIndexOf('This is a test test string', ' test ')
        );
    }

    public function testLastIndexOfWithoutMatch(): void
    {
        $this->assertEquals(
            -1,
            Str::lastIndexOf('This is a test string', 'invalid')
        );
    }

    public function testLastIndexOfWithPositiveStart(): void
    {
        $this->assertEquals(
            14,
            Str::lastIndexOf('This is a test test string', ' test ', 10)
        );
    }

    public function testLastIndexOfWithNegativeStart(): void
    {
        $this->assertEquals(
            9,
            Str::lastIndexOf('This is a test test string', ' test ', -13)
        );
    }

    public function testLastIndexOfWithEmptySearch(): void
    {
        $this->assertEquals(
            21,
            Str::lastIndexOf('This is a test string', '')
        );
    }

}
