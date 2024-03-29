<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Str;

trait ChunkTestTrait
{

    public function testChunkWithString(): void
    {
        $this->assertSame(
            [
                'T',
                'h',
                'i',
                's',
                ' ',
                'i',
                's',
                ' ',
                'a',
                ' ',
                't',
                'e',
                's',
                't',
                ' ',
                's',
                't',
                'r',
                'i',
                'n',
                'g'
            ],
            Str::chunk('This is a test string')
        );
    }

    public function testChunkWithLength(): void
    {
        $this->assertSame(
            [
                'This ',
                'is a ',
                'test ',
                'strin',
                'g'
            ],
            Str::chunk('This is a test string', 5)
        );
    }
    public function testChunkWithEmptyString(): void
    {
        $this->assertSame(
            [],
            Str::chunk('')
        );
    }

}
