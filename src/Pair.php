<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

class Pair
{
    private string $from;
    private string $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(object $object): bool
    {
        /** @var Pair $pair */
        $pair = $object;
        return $this->from == $pair->from
            && $this->to == $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }

    public function __toString(): string
    {
        return md5(serialize($this));
    }
}