<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Str;
use Fyre\Utility\Traits\MacroTrait;
use PHPUnit\Framework\TestCase;

use function class_uses;

final class StrTest extends TestCase
{
    use AfterLastTestTrait;
    use AfterTestTrait;
    use BeforeLastTestTrait;
    use BeforeTestTrait;
    use CameltestTrait;
    use CapitalizeTestTrait;
    use ChunkTestTrait;
    use ContainsAllTestTrait;
    use ContainsAnyTestTrait;
    use ContainsTestTrait;
    use EndsWithTestTrait;
    use EndTestTrait;
    use EscapeTestTrait;
    use IndexOfTestTrait;
    use IsStringTestTrait;
    use KebabTestTrait;
    use LastIndexOfTestTrait;
    use LengthTestTrait;
    use LimitTestTrait;
    use LowerTestTrait;
    use PadEndTestTrait;
    use PadStartTestTrait;
    use PadTestTrait;
    use PascalTestTrait;
    use RandomTestTrait;
    use RepeatTestTrait;
    use ReplaceArrayTestTrait;
    use ReplaceAtTestTrait;
    use ReplaceEachTestTrait;
    use ReplaceFirstTestTrait;
    use ReplaceLastTestTrait;
    use ReplaceTestTrait;
    use ReverseTestTrait;
    use ShuffleTestTrait;
    use SliceTestTrait;
    use SlugTestTrait;
    use SnakeTestTrait;
    use SplitTestTrait;
    use StartsWithTestTrait;
    use StartTestTrait;
    use TitleTestTrait;
    use TransliterateTestTrait;
    use TrimEndTestTrait;
    use TrimStartTestTrait;
    use TrimTestTrait;
    use UpperTestTrait;

    public function testMacroable(): void
    {
        $this->assertContains(
            MacroTrait::class,
            class_uses(Str::class)
        );
    }
}
