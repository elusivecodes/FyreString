<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait StartTest
{

    public function testStartWithMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::start('This is a test string', 'This is a ')
        );
    }

    public function testStartWithoutMatch(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::start('test string', 'This is a ')
        );
    }

    public function testStartWithEmptyString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::start('This is a test string', '')
        );
    }

}
