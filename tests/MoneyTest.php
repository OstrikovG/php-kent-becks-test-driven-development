<?php

declare(strict_types=1);

namespace Tests\OstrikovG\PhpKentBecksTestDrivenDevelopment;

use PHPUnit\Framework\TestCase;
use OstrikovG\PhpKentBecksTestDrivenDevelopment\Dollar;

final class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}