<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait ReverseTest
{

    public function testReverseWithString(): void
    {
        $this->assertSame(
            'gnirts tset a si sihT',
            Str::reverse('This is a test string')
        );
    }

    public function testReverseWithEmptyString(): void
    {
        $this->assertSame(
            '',
            Str::reverse('')
        );
    }

}
