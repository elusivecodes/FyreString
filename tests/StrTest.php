<?php
declare(strict_types=1);

namespace Tests;

use
    PHPUnit\Framework\TestCase;

final class StrTest extends TestCase
{

    use
        AfterTest,
        AfterLastTest,
        BeforeTest,
        BeforeLastTest,
        Cameltest,
        CapitalizeTest,
        ChunkTest,
        ContainsTest,
        ContainsAllTest,
        ContainsAnyTest,
        EndTest,
        EndsWithTest,
        EscapeTest,
        IndexOfTest,
        IsStringTest,
        KebabTest,
        LastIndexOfTest,
        LengthTest,
        LimitTest,
        LowerTest,
        PadTest,
        PadEndTest,
        PadStartTest,
        PascalTest,
        RandomTest,
        RepeatTest,
        ReplaceTest,
        ReplaceArrayTest,
        ReplaceAtTest,
        ReplaceEachTest,
        ReplaceFirstTest,
        ReplaceLastTest,
        ReverseTest,
        ShuffleTest,
        SliceTest,
        SlugTest,
        SnakeTest,
        SplitTest,
        StartTest,
        StartsWithTest,
        TitleTest,
        TransliterateTest,
        TrimTest,
        TrimEndTest,
        TrimStartTest,
        UpperTest;

}
