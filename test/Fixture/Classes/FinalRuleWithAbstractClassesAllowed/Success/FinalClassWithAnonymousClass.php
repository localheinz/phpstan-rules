<?php

declare(strict_types=1);

namespace Ergebnis\PHPStan\Rules\Test\Fixture\Classes\FinalRuleWithAbstractClassesAllowed\Success;

final class FinalClassWithAnonymousClass
{
    public function create()
    {
        return new class() {
            public function __toString(): string
            {
                return 'Hmm';
            }
        };
    }
}
