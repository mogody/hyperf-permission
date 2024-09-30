<?php

declare(strict_types = 1);

namespace Donjan\Permission\Exceptions;

use Hyperf\Collection\Collection;
use InvalidArgumentException;

class GuardDoesNotMatch extends InvalidArgumentException
{
    public static function create(string $givenGuard, Collection $expectedGuards)
    {
        return new static("The given role or permission should use guard `{$expectedGuards->implode(', ')}` instead of `{$givenGuard}`.");
    }
}
