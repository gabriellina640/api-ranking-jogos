<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $games = [
        ['name' => 'Counter-Strike 2', 'platform' => 'Steam'],
        ['name' => 'Elden Ring', 'platform' => 'Steam'],
        ['name' => 'Valorant', 'platform' => 'Riot Launcher'],
        ['name' => 'League of Legends', 'platform' => 'Riot Launcher'],
        ['name' => 'Helldivers 2', 'platform' => 'Steam'],
        ['name' => 'EA SPORTS FC 24', 'platform' => 'Steam'],
        ['name' => 'Roblox', 'platform' => 'Multiplataforma'],
        ['name' => 'Minecraft', 'platform' => 'Multiplataforma'],
        ['name' => 'Fortnite', 'platform' => 'Epic Games'],
        ['name' => 'Grand Theft Auto V', 'platform' => 'Steam'],
        ['name' => 'Cyberpunk 2077', 'platform' => 'Steam'],
        ['name' => 'Baldur\'s Gate 3', 'platform' => 'Steam'],
        ['name' => 'Warzone', 'platform' => 'Battle.net'],
        ['name' => 'Apex Legends', 'platform' => 'Steam'],
        ['name' => 'Stardew Valley', 'platform' => 'Steam'],
    ];

    foreach ($games as $game) {
        \App\Models\Game::create([
            'name' => $game['name'],
            'platform' => $game['platform'],
            'active_players' => fake()->numberBetween(50000, 1500000),
            'weekly_points' => fake()->numberBetween(100, 1000),
            'monthly_points' => fake()->numberBetween(1000, 10000),
            'yearly_points' => fake()->numberBetween(10000, 100000),
        ]);
    }
}
}
