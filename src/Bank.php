<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

class Bank
{
    private array $rates = [];

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function rate(string $from, string $to): int
    {
        if ($from == $to) return 1;
        $pair = new Pair($from, $to);
        return $this->rates[(string) $pair];
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $pair = new Pair($from, $to);
        $this->rates[(string) $pair] = $rate;
    }
}