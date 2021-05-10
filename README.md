# FyreString

**FyreString** is a free, string manipulation library for *PHP*.


## Table Of Contents
- [Installation](#installation)
- [Methods](#methods)



## Installation

**Using Composer**

```
composer install fyre/string
```

In PHP:

```php
use Fyre\Str;
```


## Methods

**After**

Return the contents of a string after the first occurrence of a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$after = Str::after($string, $search);
```

If the `search` string is not found, this method will return the original string.

**After Last**

Return the contents of a string after the last occurrence of a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$afterLast = Str::afterLast($string, $search);
```

If the `search` string is not found, this method will return the original string.

**Before**

Return the contents of a string before the first occurrence of a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$before = Str::before($string, $search);
```

If the `search` string is not found, this method will return an empty string.

**Before Last**

Return the contents of a string before the last occurrence of a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$beforeLast = Str::beforeLast($string, $search);
```

If the `search` string is not found, this method will return an empty string.

**Camel**

Convert a string into camelCase.

- `$string` is the input string.

```php
$camel = Str::camel($string);
```

**Capitalize**

Capitalize the first character of a string.

- `$string` is the input string.

```php
$capitalized = Str::capitalize($string);
```

**Chunk**

Split a string into smaller chunks.

- `$string` is the input string.
- `$size` is the maximum length of a chunk, and will default to *1*.

```php
$chunks = Str::chunks($string, $size);
```

**Contains**

Test whether a string contains a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$contains = Str::contains($string, $search);
```

**Contains All**

Test whether a string contains all substrings.

- `$string` is the input string.
- `$searches` is an array of search strings.

```php
$containsAll = Str::containsAll($string, $searches);
```

**Contains Any**

Test whether a string contains any substring.

- `$string` is the input string.
- `$searches` is an array of search strings.

```php
$containsAny = Str::containsAny($string, $searches);
```

**End**

Append a substring to a string (if it does not already end with the substring).

- `$string` is the input string.
- `$search` is the string to append.

```php
$end = Str::end($string, $search);
```

**Ends With**

Test whether a string ends with a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$endsWith = Str::endsWith($string, $search);
```

**Escape**

Escape characters in a string for use in HTML.

- `$string` is the input string.
- `$flags` is the flags to use when escaping, and will default to *ENT_QUOTES | ENT_HTML5*.

```php
$escaped = Str::escape($string, $flags);
```

**Index Of**

Get the position of the first occurrence of a substring within a string.

- `$string` is the input string.
- `$search` is the search string.
- `$start` is the starting offset, and will default to *0*.

```php
$indexOf = Str::indexOf($string, $search);
```

If the `search` string is not found, this method will return *-1*.

**Kebab**

Convert a string into kebab-case.

- `$string` is the input string.

```php
$kebab = Str::kebab($string);
```

**Last Index Of**

Get the position of the last occurrence of a substring within a string.

- `$string` is the input string.
- `$search` is the search string.
- `$start` is the starting offset, and will default to *0*.

```php
$lastIndexOf = Str::lastIndexOf($string, $search);
```

If the `search` string is not found, this method will return *-1*.

**Length**

Get the length of a string (in bytes).

- `$string` is the input string.

```php
$length = Str::length($string);
```

**Limit**

Limit a string to a specified number of bytes.

- `$string` is the input string.
- `$limit` is the number of bytes to split the string after.
- `$append` is the substring to append if the string is split, and will default to *"..*".

```php
$limited = Str::limit($string, $limit, $append);
```

**Lower**

Convert a string into lowercase.

- `$string` is the input string.

```php
$lower = Str::lower($string);
```

**Pad**

Pad a string to a specified length.

- `$string` is the input string.
- `$length` is the desired length.
- `$padding` is the padding to use, and will default to " ".

```php
$padded = Str::pad($string, $length, $padding);
```

**Pad End**

Pad the end of a string to a specified length.

- `$string` is the input string.
- `$length` is the desired length.
- `$padding` is the padding to use, and will default to " ".

```php
$padded = Str::padEnd($string, $length, $padding);
```

**Pad Start**

Pad the start of a string to a specified length.

- `$string` is the input string.
- `$length` is the desired length.
- `$padding` is the padding to use, and will default to " ".

```php
$padded = Str::padStart($string, $length, $padding);
```

**Pascal**

Convert a string into PascalCase.

- `$string` is the input string.

```php
$pascal = Str::pascal($string);
```

**Random**

Generate a random string.

- `$length` is the length of the string to generate, and will default to *16*.
- `$chars` is the characters to use when generating the string, and will default to "*abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYXZ0123456789*".

```php
$random = Str::random($length, $chars);
```

**Repeat**

Repeat a string a specified number of times.

- `$string` is the input string.
- `$count` is the number of times to repeat.

```php
$repeated = Str::repeat($string, $count);
```

**Replace**

Search and replace a value within a string.

- `$string` is the input string.
- `$search` is the value to replace.
- `$replace` is the replacement string.

```php
$replaced = Str::replace($string, $search, $replace);
```

**Replace Array**

Search and replace a value within a string.

- `$string` is the input string.
- `$search` is the value to replace.
- `$replacements` is an array of replacement strings.

```php
$replaced = Str::replaceArray($string, $search, $replacements);
```

**Replace At**

Replace text within a portion of a string.

- `$string` is the input string.
- `$replace` is the replacement string.
- `$position` is the position to replace from.
- `$length` is the length to replace.

```php
$replaced = Str::replaceAt($string, $replace, $position, $length);
```

**Replace Each**

 Search and replace key/value pairs within a string.

- `$string` is the input string.
- `$replacements` is an array of replacements.

```php
$replaced = Str::replaceEach($string, $replacements);
```

**Replace First**

Search and replace the first occurrence of a value within a string.

- `$string` is the input string.
- `$search` is the value to replace.
- `$replace` is the replacement string.

```php
$replaced = Str::replaceFirst($string, $search, $replace);
```

**Replace Last**

Search and replace the last occurrence of a value within a string.

- `$string` is the input string.
- `$search` is the value to replace.
- `$replace` is the replacement string.

```php
$replaced = Str::replaceLast($string, $search, $replace);
```

**Reverse**

Reverse the contents of a string.

- `$string` is the input string.

```php
$reversed = Str::reverse($string);
```

**Shuffle**

Shuffle the contents of a string.

- `$string` is the input string.

```php
$shuffled = Str::shuffle($string);
```

**Slice**

Return a specified portion of a string.

- `$string` is the input string.
- `$start` is the starting offset.
- `$length` is the maximum length to return, and will default to *PHP_INT_MAX*.

```php
$sliced = Str::slice($string, $start, $length);
```

**Slug**

Format a string for use in a URL.

- `$string` is the input string.
- `$delimiter` is the delimiter to use, and will default to "*_*".

```php
$slug = Str::slug($string, $delimiter);
```

**Snake**

Convert a string into snake_case.

- `$string` is the input string.

```php
$snake = Str::snake($string);
```

**Split**

Split a string by a specified delimiter.

- `$string` is the input string.
- `$delimiter` is the delimiter to split by.
- `$limit` is the maximum number of substrings to return, and will default to *PHP_INT_MAX*.

```php
$split = Str::split($string, $delimiter);
```

**Start**

Prepend a substring to a string (if it does not already begin with the substring).

- `$string` is the input string.
- `$search` is the string to prepend.

```php
$start = Str::start($string, $search);
```

**Starts With**

Test whether a string begins with a substring.

- `$string` is the input string.
- `$search` is the search string.

```php
$startsWith = Str::startsWith($string, $search);
```

**Title**

Capitalize the first character of each word in a string.

- `$string` is the input string.

```php
$title = Str::title($string);
```

**Transliterate**

Transliterate the characters of a string into ASCII.

- `$string` is the input string.

```php
$transliterated = Str::transliterate($string);
```

**Trim**

Trim whitespace (or other characters) from the start and end of a string.

- `$string` is the input string.
- `$mask` is the characters to trim, and will default to " *\t\n\r\0\x0B*".

```php
$trimmed = Str::trim($string, $mask);
```

**Trim End**

Trim whitespace (or other characters) from the end of a string.

- `$string` is the input string.
- `$mask` is the characters to trim, and will default to " *\t\n\r\0\x0B*".

```php
$trimmed = Str::trimEnd($string, $mask);
```

**Trim Start**

Trim whitespace (or other characters) from the start of a string.

- `$string` is the input string.
- `$mask` is the characters to trim, and will default to " *\t\n\r\0\x0B*".

```php
$trimmed = Str::trimStart($string, $mask);
```

**Upper**

Convert a string into uppercase.

- `$string` is the input string.

```php
$upper = Str::upper($string);
```