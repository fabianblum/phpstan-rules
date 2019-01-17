<?php

declare(strict_types=1);

namespace Localheinz\PHPStan\Rules\Test\Fixture\Classes\NoExtendsRuleWithClassesAllowedToBeExtended\Success;

$foo = new class() extends ClassAllowedToBeExtended {
    public function __toString(): string
    {
        return 'Hmm';
    }
};
