<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game; // Certifique-se de que o model Game está sendo importado

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $jogosAtuais = [
            ['name' => 'Counter-Strike 2', 'platform' => 'Steam'],
            ['name' => 'Elden Ring', 'platform' => 'Steam'],
            ['name' => 'Valorant', 'platform' => 'Riot Launcher'],
            ['name' => 'Helldivers 2', 'platform' => 'Steam'],
            ['name' => 'Baldur\'s Gate 3', 'platform' => 'Steam'],
            ['name' => 'Fortnite', 'platform' => 'Epic Games'],
            ['name' => 'Grand Theft Auto V', 'platform' => 'Steam'],
            ['name' => 'EA SPORTS FC 24', 'platform' => 'Steam'],
            ['name' => 'Roblox', 'platform' => 'Multiplataforma'],
            ['name' => 'League of Legends', 'platform' => 'Riot Launcher'],
            ['name' => 'Apex Legends', 'platform' => 'Steam'],
            ['name' => 'Call of Duty: Warzone', 'platform' => 'Battle.net'],
            ['name' => 'Minecraft', 'platform' => 'Multiplataforma'],
            ['name' => 'Cyberpunk 2077', 'platform' => 'Steam'],
            ['name' => 'Stardew Valley', 'platform' => 'Steam'],
        ];

        foreach ($jogosAtuais as $jogo) {
            Game::create([
                'name' => $jogo['name'],
                'platform' => $jogo['platform'],
                'active_players' => fake()->numberBetween(50000, 1800000), // Jogadores de 50k a 1.8M
                'weekly_points' => fake()->numberBetween(100, 1000),
                'monthly_points' => fake()->numberBetween(1000, 10000),
                'yearly_points' => fake()->numberBetween(10000, 100000),
            ]);
        }
    }
}