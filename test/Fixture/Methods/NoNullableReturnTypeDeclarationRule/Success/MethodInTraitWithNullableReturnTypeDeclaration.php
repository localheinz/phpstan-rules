<?php

declare(strict_types=1);

namespace Ergebnis\PHPStan\Rules\Test\Fixture\Methods\NoNullableReturnTypeDeclarationRule\Success;

trait MethodInTraitWithNullableReturnTypeDeclaration
{
    public function toString(): ?string
    {
        return 'Hello';
    }
}
