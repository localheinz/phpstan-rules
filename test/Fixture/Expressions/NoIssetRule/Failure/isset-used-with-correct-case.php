<?php

declare(strict_types=1);

namespace Localheinz\PHPStan\Rules\Test\Fixture\Expressions\NoIssetRule\Failure;

if (isset($foo)) {
    echo 'Hello!';
}
