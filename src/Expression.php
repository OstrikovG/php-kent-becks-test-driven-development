<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

interface Expression
{
    public function reduce(string $to): Money;
}