<?php

declare(strict_types=1);

namespace App\GambaBot\User\Inventory;

use App\GambaBot\Exceptions\InvalidDiscordUserId;

/**
 * 
 */
abstract readonly class CurrencyInventory
{
    public string $owner;

    /**
     * Undocumented function
     *
     * @param string $ownerUID
     */
    public function __construct(string $ownerUID) {
        // TODO: Create validation?
        if (strlen($ownerUID) < 1) {
            throw new InvalidDiscordUserId($ownerUID . ' is not a valid user id');
        }

        $this->owner = $ownerUID;
    }

    /**
     * Undocumented function
     *
     * @param int $coins
     * @return void
     */
    abstract public function setCoins(int $coins): void;

    /**
     * Undocumented function
     *
     * @return int
     */
    abstract public function getCoins(): int;

    /**
     * Undocumented function
     *
     * @param int $coins
     * @return void
     */
    abstract public function addCoins(int $coins): void;
}
