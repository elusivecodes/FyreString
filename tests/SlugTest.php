<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Str;

trait SlugTest
{

    public function testSlugWithString(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('This is a test string')
        );
    }

    public function testSlugWithConsecutiveSpaces(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('This is a test string')
        );
    }

    public function testSlugFromCamelCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('thisIsATestString')
        );
    }

    public function testSlugFromKebabCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('this-is-a-test-string')
        );
    }

    public function testSlugFromPascalCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('ThisIsATestString')
        );
    }

    public function testSlugFromSnakeCase(): void
    {
        $this->assertEquals(
            'this_is_a_test_string',
            Str::slug('this_is_a_test_string')
        );
    }

    public function testSlugWithDelimiter(): void
    {
        $this->assertEquals(
            'this+is+a+test+string',
            Str::slug('this_is_a_test_string', '+')
        );
    }

    public function testSlugWithAccents(): void
    {
        $this->assertEquals(
            'aeiou',
            Str::slug('äëïöü')
        );
    }

}
