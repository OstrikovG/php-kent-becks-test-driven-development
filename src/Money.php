<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

abstract class Money
{
    protected int $amount;
    protected string $currency;

    public abstract function times(int $multiplier): Money;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }

    public function equals(object $object): bool
    {
        /** @var Money $money */
        $money = $object;
        return $this->amount == $money->amount
            && get_class($this) == get_class($object);
    }
}