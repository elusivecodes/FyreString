<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

use function
    array_unique,
    count,
    sort;

trait ShuffleTest
{

    public function testShuffleIsRandom(): void
    {
        $test = Str::random();
        $test1 = Str::chunk($test);
        sort($test1);

        $strings = [];

        for ($i = 0; $i < 1000; $i++) {
            $string = Str::shuffle($test);
            $test2 = Str::chunk($string);
            sort($test2);
            $this->assertEquals(
                $test1,
                $test2
            );
            $strings[] = $string;
        }

        $strings = array_unique($strings);

        $this->assertTrue(
            count($strings) > 100
        );
    }

}
