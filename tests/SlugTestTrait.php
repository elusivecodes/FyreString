<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Str;

trait SlugTestTrait
{
    public function testSlugFromCamelCase(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('thisIsATestString')
        );
    }

    public function testSlugFromKebabCase(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('this-is-a-test-string')
        );
    }

    public function testSlugFromPascalCase(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('ThisIsATestString')
        );
    }

    public function testSlugFromSnakeCase(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('this_is_a_test_string')
        );
    }

    public function testSlugWithAccents(): void
    {
        $this->assertSame(
            'aeiou',
            Str::slug('äëïöü')
        );
    }

    public function testSlugWithConsecutiveSpaces(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('This is a test string')
        );
    }

    public function testSlugWithDelimiter(): void
    {
        $this->assertSame(
            'this+is+a+test+string',
            Str::slug('this_is_a_test_string', '+')
        );
    }

    public function testSlugWithString(): void
    {
        $this->assertSame(
            'this_is_a_test_string',
            Str::slug('This is a test string')
        );
    }
}
