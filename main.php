<?php

declare(strict_types=1);

use Discord\Discord;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;
use Symfony\Component\Dotenv\Dotenv;

const AUTO_LOADER = __DIR__ . '/vendor/autoload.php';

require_once AUTO_LOADER;

new Dotenv()->load(__DIR__ . '/.env');

$discord = new Discord([
    'token' => $_ENV['BOT_TOKEN'],
    'loadAllMembers' => true,
    'intents' => Intents::getDefaultIntents() | Intents::GUILDS | Intents::GUILD_MEMBERS
]);

$discord->on('init', function (Discord $discord): void {
    
    $discord->on('heartbeat', function (): void {
        echo 'FOUND HB', PHP_EOL;
    });
});
