<?php

declare(strict_types=1);

namespace OstrikovG\PhpKentBecksTestDrivenDevelopment;

class Money
{
    protected int $amount;
    protected string $currency;

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
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }

    public function times(int $multiplier): Money
    {
        return new static($this->amount * $multiplier, $this->currency);
    }

    public function equals(object $object): bool
    {
        /** @var Money $money */
        $money = $object;
        return $this->amount == $money->amount
            && $this->currency() == $money->currency();
    }
}