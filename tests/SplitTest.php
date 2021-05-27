<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait SplitTest
{

    public function testSplitWithSpace(): void
    {
        $this->assertEquals(
            [
                'This',
                'is',
                'a',
                'test',
                'string'
            ],
            Str::split('This is a test string', ' ')
        );
    }

    public function testSplitWithString(): void
    {
        $this->assertEquals(
            [
                'This is a',
                'string'
            ],
            Str::split('This is a test string', ' test ')
        );
    }

    public function testSplitWithPositiveLimit(): void
    {
        $this->assertEquals(
            [
                'This',
                'is',
                'a test string'
            ],
            Str::split('This is a test string', ' ', 3)
        );
    }

    public function testSplitWithNegativeLimit(): void
    {
        $this->assertEquals(
            [
                'This',
                'is',
                'a',
                'test'
            ],
            Str::split('This is a test string', ' ', -1)
        );
    }

    public function testSplitWithZeroLimit(): void
    {
        $this->assertEquals(
            [
                'This is a test string'
            ],
            Str::split('This is a test string', ' ', 0)
        );
    }

    public function testSplitWithEmptyString(): void
    {
        $this->assertEquals(
            [''],
            Str::split('', ' ')
        );
    }

}
