<?php

declare(strict_types=1);

namespace App\GambaBot\Games\Components;

use App\GambaBot\User\Inventory\CurrencyInventory;
use Discord\Parts\User\User;
use Stringable;
use stdClass;

final class Player implements Stringable
{
    private const string DISCORD_AVATAR_URL = 'https://cdn.discordapp.com/avatars/';

    private readonly CurrencyInventory $inventory;

    private stdClass $playerData;

    private readonly User $user;

    /**
     * Store Player data in an stdClass.
     */
    public stdClass $data {
        get {
            if (! isset($this->playerData)) {
                $this->playerData = new stdClass();
            }

            return $this->playerData;
        }
    }

    /**
     * Id of the Discord user.
     */
    public string $uid {
        get => $this->user->id;
    }

    /**
     * Players Discord user/display name.
     */
    public string $name {
        get => $this->user->global_name ?? $this->user->username;
    }

    /**
     * Players Discord avatar as url.
     */
    public string $avatar {
        get => self::DISCORD_AVATAR_URL.$this->uid.'/'.$this->user->avatar;
    }

    public function __construct()
    {
        throw new \Exception('Not implemented');
    }
    
    #[\Override]
    public function __toString(): string
    {
        return 'PLAYER_NAME';
    }
}
