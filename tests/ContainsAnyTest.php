<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ContainsAnyTest
{

    public function testContainsAnyWithMatch(): void
    {
        $this->assertTrue(
            Str::containsAny('This is a string', ['test', 'is'])
        );
    }

    public function testContainsAnyWithoutMatch(): void
    {
        $this->assertFalse(
            Str::containsAny('This is a string', ['test', 'value'])
        );
    }

    public function testContainsAnyWithMatchAtStart(): void
    {
        $this->assertTrue(
            Str::containsAny('This is a test string', ['This'])
        );
    }

    public function testContainsAnyWithEmptyString(): void
    {
        $this->assertTrue(
            Str::containsAny('This is a test string', [''])
        );
    }

}
