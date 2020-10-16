<?php

namespace Tests;

use
    Fyre\Str;

trait ContainsTest
{

    public function testContainsWithMatch(): void
    {
        $this->assertTrue(
            Str::contains('This is a test string', 'test')
        );
    }

    public function testContainsWithoutMatch(): void
    {
        $this->assertFalse(
            Str::contains('This is a string', 'test')
        );
    }

    public function testContainsWithMatchAtStart(): void
    {
        $this->assertTrue(
            Str::contains('This is a test string', 'This')
        );
    }

    public function testContainsWithEmptyString(): void
    {
        $this->expectError();
        Str::contains('This is a test string', '');
    }

}
