<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ReplaceAtTest
{

    public function testReplaceAtWithPositivePosition(): void
    {
        $this->assertSame(
            'This is a new test string',
            Str::replaceAt('This is a test string', 'new ', 10)
        );
    }

    public function testReplaceAtWithNegativePosition(): void
    {
        $this->assertSame(
            'This is a new test string',
            Str::replaceAt('This is a test string', 'new ', -11)
        );
    }

    public function testReplaceWithAtWithPositiveLength(): void
    {
        $this->assertSame(
            'This is a new string',
            Str::replaceAt('This is a test string', 'new', 10, 4)
        );
    }

    public function testReplaceAtWithNegativeLength(): void
    {
        $this->assertSame(
            'This is a new string',
            Str::replaceAt('This is a test string', 'new', 10, -7)
        );
    }

}
