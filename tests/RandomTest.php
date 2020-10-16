<?php

namespace Tests;

use
    Fyre\Str;

use function
    array_unique,
    count,
    preg_match;

trait RandomTest
{

    public function testRandomIsRandom(): void
    {
        $strings = [];

        for ($i = 0; $i < 1000; $i++) {
            $string = Str::random();
            $this->assertTrue(
                preg_match('/^[0-9a-zA-Z]{16}$/', $string) === 1
            );
            $strings[] = $string;
        }

        $strings = array_unique($strings);

        $this->assertTrue(
            count($strings) > 100
        );
    }

    public function testRandomWithLength(): void
    {
        $strings = [];

        for ($i = 0; $i < 1000; $i++) {
            $string = Str::random(24);
            $this->assertTrue(
                preg_match('/^[0-9a-zA-Z]{24}$/', $string) === 1
            );
            $strings[] = $string;
        }

        $strings = array_unique($strings);

        $this->assertTrue(
            count($strings) > 100
        );
    }

    public function testRandomWithNumericChars(): void
    {
        $strings = [];

        for ($i = 0; $i < 1000; $i++) {
            $string = Str::random(8, Str::NUMERIC);
            $this->assertTrue(
                preg_match('/^[0-9]{8}$/', $string) === 1
            );
            $strings[] = $string;
        }

        $strings = array_unique($strings);

        $this->assertTrue(
            count($strings) > 100
        );
    }

    public function testRandomWithAlphaChars(): void
    {
        $strings = [];

        for ($i = 0; $i < 1000; $i++) {
            $string = Str::random(8, Str::ALPHA);
            $this->assertTrue(
                preg_match('/^[a-zA-Z]{8}$/', $string) === 1
            );
            $strings[] = $string;
        }

        $strings = array_unique($strings);

        $this->assertTrue(
            count($strings) > 100
        );
    }

}
