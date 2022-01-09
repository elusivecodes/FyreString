<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait SliceTest
{

    public function testSliceWithPositiveStart(): void
    {
        $this->assertSame(
            'test string',
            Str::slice('This is a test string', 10)
        );
    }

    public function testSliceWithNegativeStart(): void
    {
        $this->assertSame(
            'test string',
            Str::slice('This is a test string', -11)
        );
    }

    public function testSliceWithPositiveLength(): void
    {
        $this->assertSame(
            'test',
            Str::slice('This is a test string', 10, 4)
        );
    }

    public function testSliceWithNegativeLength(): void
    {
        $this->assertSame(
            'test',
            Str::slice('This is a test string', 10, -7)
        );
    }

    public function testSliceWithOutOfBoundsStart(): void
    {
        $this->assertSame(
            '',
            Str::slice('This is a test string', 21)
        );
    }

    public function testSliceWithEmptyString(): void
    {
        $this->assertSame(
            '',
            Str::slice('', 10)
        );
    }

}
