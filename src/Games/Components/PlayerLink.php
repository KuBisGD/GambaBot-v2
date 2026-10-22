<?php

declare(strict_types=1);

namespace App\GambaBot\Games\Components;

use Discord\Parts\Interactions\ApplicationCommand;

/**
 * Links a player to an Interaction.
 */
final readonly class PlayerLink
{
    public function __construct(
        public ApplicationCommand $interaction,
        public Player $player
    ) {}
}
