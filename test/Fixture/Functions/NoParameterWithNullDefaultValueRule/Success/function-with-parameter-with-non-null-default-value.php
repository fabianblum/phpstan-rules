<?php

declare(strict_types=1);

namespace Localheinz\PHPStan\Rules\Test\Fixture\Functions\NoParameterWithNullDefaultValueRule\Success;

function foo($bar = true)
{
    return $bar;
}
