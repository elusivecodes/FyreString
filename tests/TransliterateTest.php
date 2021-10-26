<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Str;

trait TransliterateTest
{

    public function testTransliterateWithString(): void
    {
        $this->assertEquals(
            'This is a test string',
            Str::transliterate('This is a test string')
        );
    }

    public function testTransliterateWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::transliterate('äëïöü')
        );
    }

}
