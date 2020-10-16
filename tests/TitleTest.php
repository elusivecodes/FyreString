<?php

namespace Tests;

use
    Fyre\Str;

trait TitleTest
{

    public function testTitleFromLowerCase(): void
    {
        $this->assertEquals(
            'This Is A Test String',
            Str::title('this is a test string')
        );
    }

    public function testTitleFromUpperCase(): void
    {
        $this->assertEquals(
            'This Is A Test String',
            Str::title('THIS IS A TEST STRING')
        );
    }

}
