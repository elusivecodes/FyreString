<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait SliceTest
{

    public function testSliceWithPositiveStart(): void
    {
        $this->assertEquals(
            'test string',
            Str::slice('This is a test string', 10)
        );
    }

    public function testSliceWithNegativeStart(): void
    {
        $this->assertEquals(
            'test string',
            Str::slice('This is a test string', -11)
        );
    }

    public function testSliceWithPositiveLength(): void
    {
        $this->assertEquals(
            'test',
            Str::slice('This is a test string', 10, 4)
        );
    }

    public function testSliceWithNegativeLength(): void
    {
        $this->assertEquals(
            'test',
            Str::slice('This is a test string', 10, -7)
        );
    }

    public function testSliceWithOutOfBoundsStart(): void
    {
        $this->assertEquals(
            '',
            Str::slice('This is a test string', 21)
        );
    }

    public function testSliceWithEmptyString(): void
    {
        $this->assertEquals(
            '',
            Str::slice('', 10)
        );
    }

}
