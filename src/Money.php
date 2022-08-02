<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

abstract class Money
{
    protected int $amount;

    public abstract function times(int $multiplier): Money;

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    public function equals(object $object): bool
    {
        /** @var Money $money */
        $money = $object;
        return $this->amount == $money->amount
            && get_class($this) == get_class($object);
    }
}