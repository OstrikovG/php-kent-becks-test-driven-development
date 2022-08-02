<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

class Money
{
    protected int $amount;

    public function equals(object $object): bool
    {
        /** @var Money $money */
        $money = $object;
        return $this->amount == $money->amount
            && get_class($this) == get_class($object);
    }
}