<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\String;

use function strpos;
use function substr;

class Str
{
    /**
     * Is string starts with another string.
     *
     * @param string $needle
     * @param string $haystack
     *
     * @return  bool
     */
    public static function startsWith(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) === 0;
    }

    /**
     * Is string starts with another string.
     *
     * @param string $string
     * @param int $offset
     * @param int|null $length
     *
     * @return  string|false
     */
    public static function substr(string $string, int $offset, ?int $length = null)
    {
        return $length ? substr($string, $offset, $length) : substr($string, $offset);
    }
}