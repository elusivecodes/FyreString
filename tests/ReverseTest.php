<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait ReverseTest
{

    public function testReverseWithString(): void
    {
        $this->assertEquals(
            'gnirts tset a si sihT',
            Str::reverse('This is a test string')
        );
    }

    public function testReverseWithEmptyString(): void
    {
        $this->assertEquals(
            '',
            Str::reverse('')
        );
    }

}
