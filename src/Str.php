<?php

namespace Fyre;

use const
    ENT_HTML5,
    ENT_QUOTES,
    STR_PAD_BOTH,
    STR_PAD_LEFT,
    STR_PAD_RIGHT;

use function
    array_keys,
    array_shift,
    array_values,
    explode,
    htmlspecialchars,
    iconv,
    lcfirst,
    random_int,
    strlen,
    strpos,
    strrev,
    strrpos,
    strstr,
    strtolower,
    strtoupper,
    str_pad,
    str_shuffle,
    str_repeat,
    str_replace,
    str_split,
    substr,
    substr_replace,
    ucfirst,
    ucwords;

/**
 * Str
 */
class Str
{

    public const BOTH = STR_PAD_BOTH;
    public const LEFT = STR_PAD_LEFT;
    public const RIGHT = STR_PAD_RIGHT;

    public const WHITESPACE_MASK = " \t\n\r\0\x0B";

    public const ALPHA = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYXZZ';
    public const NUMERIC = '0123456789';
    public const ALPHANUMERIC = self::ALPHA.self::NUMERIC;

    /**
     * Return the contents of a string after the first occurrence of a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The after substring.
     */
    public static function after(string $string, string $search): string
    {
        if (!$search) {
            return $string;
        }

        $position = static::indexOf($string, $search);

        return $position < 0 ?
            $string :
            static::slice(
                $string,
                $position + static::length($search)
            );
    }

    /**
     * Return the contents of a string after the last occurrence of a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The after substring.
     */
    public static function afterLast(string $string, string $search): string
    {
        if (!$search) {
            return '';
        }

        $position = static::lastIndexOf($string, $search);

        return $position < 0 ?
            $string :
            static::slice(
                $string,
                $position + static::length($search)
            );
    }

    /**
     * Return the contents of a string before the first occurrence of a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The before substring.
     */
    public static function before(string $string, string $search): string
    {
        if (!$search) {
            return '';
        }

        return strstr($string, $search, true);
    }

    /**
     * Return the contents of a string before the last occurrence of a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The before substring.
     */
    public static function beforeLast(string $string, string $search): string
    {
        if (!$search) {
            return $string;
        }

        $position = static::lastIndexOf($string, $search);

        return $position < 0 ?
            '' :
            static::slice(
                $string,
                0,
                $position
            );
    }

    /**
     * Convert a string into camelCase.
     * @param string $string The input string.
     * @return string The camelCase string.
     */
    public static function camelCase(string $string): string
    {
        return lcfirst(
            static::pascalCase($string)
        );
    }

    /**
     * Capitalize the first character of a string.
     * @param string $string The input string.
     * @return string The capitalized string.
     */
    public static function capitalize(string $string): string
    {
        return ucfirst(
            static::lower($string)
        );
    }

    /**
     * Split a string into smaller chunks.
     * @param string $string The input string.
     * @param int  $size The maximum length of a chunk.
     * @return array The split substrings.
     */
    public static function chunk(string $string, int $size = 1): array
    {
        return str_split($string, $size);
    }

    /**
     * Test whether a string contains a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return bool TRUE if the string contains the substring, otherwise FALSE.
     */
    public static function contains(string $string, string $search): bool
    {
        return static::indexOf($string, $search) >= 0;
    }

    /**
     * Test whether a string contains all substrings.
     * @param string $string The input string.
     * @param array $searches The search strings.
     * @return bool TRUE if the string contains all of the substrings, otherwise FALSE.
     */
    public static function containsAll(string $string, array $searches): bool
    {
        foreach ($searches AS $search) {
            if (!static::contains($string, $search)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Test whether a string contains any substring.
     * @param string $string The input string.
     * @param array $searches The search strings.
     * @return bool TRUE if the string contains any of the substrings, otherwise FALSE.
     */
    public static function containsAny(string $string, array $searches): bool
    {
        foreach ($searches AS $search) {
            if (static::contains($string, $search)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Append a substring to a string (if it does not already end with the substring).
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The appended string.
     */
    public static function end(string $string, string $search): string
    {
        return static::endsWith($string, $search) ?
            $string :
            $string.$search;
    }

    /**
     * Test whether a string ends with a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return bool TRUE if the string ends with the substring, otherwise FALSE.
     */
    public static function endsWith(string $string, string $search): bool
    {
        if (!$search) {
            return false;
        }

        $stringLength = static::length($string);
        $searchLength = static::length($search);

        return $stringLength >= $searchLength ?
            static::slice($string, -$searchLength) === $search :
            false;
    }

    /**
     * Escape characters in a string for use in HTML.
     * @param string $string The input string.
     * @param int $flags Flags to use when escaping.
     * @return string The escaped string.
     */
    public static function escape(string $string, int $flags = ENT_QUOTES | ENT_HTML5): string
    {
        return htmlspecialchars($string, $flags);
    }

    /**
     * Get the position of the first occurrence of a substring within a string.
     * @param string $string The input string.
     * @param string $string The search string.
     * @param int $start The starting offset.
     * @return int The position of the first occurrence of the substring, or -1 if it is not found.
     */
    public static function indexOf(string $string, string $search, int $start = 0): int
    {
        $position = strpos($string, $search, $start);

        return $position !== false ?
            $position :
            -1;
    }

    /**
     * Convert a string into kebab-case.
     * @param string $string The input string.
     * @return string The kebab-case string.
     */
    public static function kebabCase(string $string): string
    {
        return static::slug($string, '-');
    }

    /**
     * Get the position of the last occurrence of a substring within a string.
     * @param string $string The input string.
     * @param string $string The search string.
     * @param int $start The starting offset.
     * @return int The position of the last occurrence of the substring, or -1 if it is not found.
     */
    public static function lastIndexOf(string $string, string $search, int $start = 0): int
    {
        $position = strrpos($string, $search, $start);

        return $position !== false ?
            $position :
            -1;
    }

    /**
     * Get the length of a string (in bytes).
     * @param string $string The input string.
     * @return int The number of bytes contained in the string.
     */
    public static function length(string $string): int
    {
        return strlen($string);
    }

    /**
     * Limit a string to a specified number of bytes.
     * @param string $string The input string.
     * @param int $limit The number of bytes to split the string at.
     * @param string $append The substring to append if the string is split.
     * @return string The split string.
     */
    public static function limit(string $string, int $limit = 100, string $append = '...'): string
    {
        return static::length($string) > $limit ?
            static::slice($string, 0, $limit).$append :
            $string;
    }

    /**
     * Convert a string into lowercase.
     * @param string $string The input string.
     * @return string The lowercase string.
     */
    public static function lower(string $string): string
    {
        return strtolower($string);
    }

    /**
     * Pad a string to a specified length.
     * @param string $string The input string.
     * @param int $length The desired length.
     * @param string $padding The padding to use.
     * @param int $padType The type of padding to perform.
     * @return string The padded string.
     */
    public static function pad(string $string, int $length, string $padding = ' ', int $padType = self::BOTH): string
    {
        return str_pad($string, $length, $padding, $padType);
    }

    /**
     * Pad the end of a string to a specified length.
     * @param string $string The input string.
     * @param int $length The desired length.
     * @param string $padding The padding to use.
     * @return string The padded string.
     */
    public static function padEnd(string $string, int $length, string $padding = ' '): string
    {
        return static::pad($string, $length, $padding, self::RIGHT);
    }

    /**
     * Pad the start of a string to a specified length.
     * @param string $string The input string.
     * @param int $length The desired length.
     * @param string $padding The padding to use.
     * @return string The padded string.
     */
    public static function padStart(string $string, int $length, string $padding = ' '): string
    {
        return static::pad($string, $length, $padding, self::LEFT);
    }

    /**
     * Convert a string into PascalCase.
     * @param string $string The input string.
     * @return string The PascalCase string.
     */
    public static function pascalCase(string $string): string
    {
        return static::replace(
            static::title(
                static::preFormatCase($string)
            ),
            ' ',
            ''
        );
    }

    /**
     * Generate a random string.
     * @param int $length The length of the string to generate.
     * @param string $chars The characters to use when generating the string.
     * @return string The random string.
     */
    public static function random(int $length = 16, string $chars = self::ALPHANUMERIC): string
    {
        $max = static::length($chars) - 1;

        $output = '';
        while ($length-- > 0) {
            $output .= $chars[random_int(0, $max)];
        }

        return $output;
    }

    /**
     * Repeat a string a specified number of times.
     * @param string $string The input string.
     * @param int $count The number of times to repeat.
     * @return string The repeated string.
     */
    public static function repeat(string $string, int $count): string
    {
        return str_repeat($string, $count);
    }

    /**
     * Search and replace a value within a string.
     * @param string $string The input string.
     * @param string $search The value to replace.
     * @param string $replace The replacement string.
     * @return string The string with replaced values.
     */
    public static function replace(string $string, string $search, string $replace): string
    {
        return str_replace($search, $replace, $string);
    }

    /**
     * Search and replace a value sequentially within a string.
     * @param string $string The input string.
     * @param string $search The value to replace.
     * @param array $replacements The replacement strings.
     * @return string The string with replaced values.
     */
    public static function replaceArray(string $string, string $search, array $replacements): string
    {
        if (!$search) {
            return $string;
        }

        $offset = 0;
        $length = static::length($search);

        while (($position = static::indexOf($string, $search, $offset)) >= 0) {
            $replace = array_shift($replacements) ?? '';
            $string = static::replaceAt($string, $replace, $position, $length);
            $offset = $position + static::length($replace);
        }

        return $string;
    }

    /**
     * Replace text within a portion of a string.
     * @param string $string The input string.
     * @param string $replace The replacement string.
     * @param int $position The position to replace from.
     * @return int $length The length to replace.
     * @return string The string with replaced text.
     */
    public static function replaceAt(string $string, string $replace, int $position, int $length = 0): string
    {
        return substr_replace($string, $replace, $position, $length);
    }

    /**
     * Search and replace key/value pairs within a string.
     * @param string $string The input string.
     * @param array $replacements The replacements.
     * @return string The string with replaced values.
     */
    public static function replaceEach(string $string, array $replacements): string
    {
        return str_replace(
            array_keys($replacements),
            array_values($replacements),
            $string
        );
    }

    /**
     * Search and replace the first occurrence of a value within a string.
     * @param string $string The input string.
     * @param string $search The value to replace.
     * @param string $replace The replacement string.
     * @return string The string with replaced values.
     */
    public static function replaceFirst(string $string, string $search, string $replace): string
    {
        if (!$search) {
            return $string;
        }

        $position = static::indexOf($string, $search);

        return $position < 0 ?
            $string :
            static::replaceAt(
                $string,
                $replace,
                $position,
                static::length($search)
            );
    }

    /**
     * Search and replace the last occurrence of a value within a string.
     * @param string $string The input string.
     * @param string $search The value to replace.
     * @param string $replace The replacement string.
     * @return string The string with replaced values.
     */
    public static function replaceLast(string $string, string $search, string $replace): string
    {
        if (!$search) {
            return $string;
        }

        $position = static::lastIndexOf($string, $search);

        return $position < 0 ?
            $string :
            static::replaceAt(
                $string,
                $replace,
                $position,
                static::length($search)
            );
    }

    /**
     * Reverse the contents of a string.
     * @param string $string The input string.
     * @return string The reversed string.
     */
    public static function reverse(string $string): string
    {
        return strrev($string);
    }

    /**
     * Shuffle the contents of a string
     * @param string $string The input string.
     * @return string The shuffled string.
     */
    public static function shuffle(string $string): string
    {
        return str_shuffle($string);
    }

    /**
     * Return a specified portion of a string.
     * @param string $string The input string.
     * @param int $start The starting offset.
     * @param int $length The maximum length to return.
     * @return string The sliced string.
     */
    public static function slice(string $string, int $start, int $length = PHP_INT_MAX): string
    {
        return substr($string, $start, $length);
    }

    /**
     * Format a string for use in a URL.
     * @param string $string The input string.
     * @param string $delimiter The delimiter to use.
     * @return string The slug string.
     */
    public static function slug(string $string, string $delimiter = '_'): string
    {
        return static::lower(
            static::replace(
                static::preFormatCase(
                    $string
                ),
                ' ',
                $delimiter
            )
        );
    }

    /**
     * Convert a string into snake_case.
     * @param string $string The input string.
     * @return string The snake_case string.
     */
    public static function snakeCase(string $string): string
    {
        return static::slug($string);
    }

    /**
     * Split a string by a specified delimiter.
     * @param string $string The input string.
     * @param string $delimiter The delimiter to split by.
     * @param int $limit The maximum number of substrings to return.
     * @return array The split substrings.
     */
    public static function split(string $string, string $delimiter, int $limit = PHP_INT_MAX): array
    {
        return explode($delimiter, $string, $limit);
    }

    /**
     * Prepend a substring to a string (if it does not already begin with the substring).
     * @param string $string The input string.
     * @param string $search The search string.
     * @return string The prepended string.
     */
    public static function start(string $string, string $search): string
    {
        return static::startsWith($string, $search) ?
            $string :
            $search.$string;
    }

    /**
     * Test whether a string begins with a substring.
     * @param string $string The input string.
     * @param string $search The search string.
     * @return bool TRUE if the string begins with the substring, otherwise FALSE.
     */
    public static function startsWith(string $string, string $search): bool
    {
        if (!$search) {
            return false;
        }

        $stringLength = static::length($string);
        $searchLength = static::length($search);

        return $stringLength >= $searchLength ?
            static::slice($string, 0, $searchLength) === $search :
            false;
    }

    /**
     * Capitalize the first character of each word in a string.
     * @param string $string The input string.
     * @return string The capitalized string.
     */
    public static function title(string $string): string
    {
        return ucwords(
            static::lower($string)
        );
    }

    /**
     * Transliterate the characters of a string into ASCII.
     * @param string $string The input string.
     * @return string The transliterated string.
     */
    public static function transliterate(string $string): string
    {
        return iconv(
            'UTF-8',
            'ASCII//TRANSLIT//IGNORE',
            $string
        );
    }

    /**
     * Trim whitespace (or other characters) from the start and end of a string.
     * @param string $string The input string.
     * @param string $mask The characters to trim.
     * @return string The trimmed string.
     */
    public static function trim(string $string, string $mask = self::WHITESPACE_MASK): string
    {
        return trim($string, $mask);
    }

    /**
     * Trim whitespace (or other characters) from the end of a string.
     * @param string $string The input string.
     * @param string $mask The characters to trim.
     * @return string The trimmed string.
     */
    public static function trimEnd(string $string, string $mask = self::WHITESPACE_MASK): string
    {
        return rtrim($string, $mask);
    }

    /**
     * Trim whitespace (or other characters) from the start of a string.
     * @param string $string The input string.
     * @param string $mask The characters to trim.
     * @return string The trimmed string.
     */
    public static function trimStart(string $string, string $mask = self::WHITESPACE_MASK): string
    {
        return ltrim($string, $mask);
    }

    /**
     * Convert a string into UPPERCASE.
     * @param string $string The input string.
     * @return string The UPPERCASE string.
     */
    public static function upper(string $string): string
    {
        return strtoupper($string);
    }

    /**
     * Pre-format a string for case conversion.
     * @param string $string The input string.
     * @return string The formatted string.
     */
    private static function preFormatCase(string $string): string
    {
        return static::trim(
            preg_replace(
                [
                    '/([A-Z])/',
                    '/[_-]/',
                    '/\s+/'
                ],
                [
                    ' $1',
                    ' ',
                    ' '
                ],
                static::transliterate($string)
            )
        );
    }

}
