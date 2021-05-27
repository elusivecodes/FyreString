<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ChunkTest
{

    public function testChunkWithString(): void
    {
        $this->assertEquals(
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
        $this->assertEquals(
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
        $this->assertEquals(
            [''],
            Str::chunk('')
        );
    }

}
