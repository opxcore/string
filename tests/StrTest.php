<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Tests\String;

use OpxCore\String\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{

    public function testStartsWith(): void
    {
        self::assertTrue(Str::startsWith('some string', 'some'));
        self::assertFalse(Str::startsWith('some string', 'string'));
    }

    public function testCutStart(): void
    {
        self::assertEquals('me string', Str::cutFromStart('some string', 2));
        self::assertEquals('string', Str::cutFromStart('some string', 5));
    }

    public function testSubStr(): void
    {
        self::assertEquals('some', Str::substr('some string', 0, 4));
        self::assertEquals('string', Str::substr('some string', 5));
        self::assertEquals('me', Str::substr('some string', 2, 2));
    }
}
