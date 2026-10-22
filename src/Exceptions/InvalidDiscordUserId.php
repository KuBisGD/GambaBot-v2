<?php

declare(strict_types=1);

namespace App\GambaBot\Exceptions;

/**
 * Represents an error for an invalid discord user id
 */
final class InvalidDiscordUserId extends \Exception
{
    public function __construct(string $message = "", int $code = 0, \Throwable|null $previous = null)
    {
        parent::__construct();
    }
}
