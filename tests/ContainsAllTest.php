<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ContainsAllTest
{

    public function testContainsAllWithMatches(): void
    {
        $this->assertTrue(
            Str::containsAll('This is a string', ['string', 'is'])
        );
    }

    public function testContainsAllWithoutMatch(): void
    {
        $this->assertFalse(
            Str::containsAll('This is a string', ['test', 'value'])
        );
    }

    public function testContainsAllWithSingleMatch(): void
    {
        $this->assertFalse(
            Str::containsAll('This is a string', ['is', 'value'])
        );
    }

    public function testContainsAllWithEmptyString(): void
    {
        $this->assertTrue(
            Str::containsAll('This is a test string', [''])
        );
    }

}
