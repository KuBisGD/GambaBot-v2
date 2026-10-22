<?php

declare(strict_types=1);

namespace App\GambaBot\User\Inventory;

use App\GambaBot\User\Inventory\CurrencyInventory;

final readonly class Inventory
{
    public static function createCurrencyInventory(string $uid): CurrencyInventory
    {
        throw new \Exception('Not implemented');
    }
}