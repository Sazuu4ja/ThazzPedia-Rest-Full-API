<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::insert([
            ['name' => 'Mobile Legends', 'developer' => 'Moonton'],
            ['name' => 'PUBG Mobile', 'developer' => 'Tencent'],
            ['name' => 'Valorant', 'developer' => 'Riot Games'],
            ['name' => 'Magic Chess: Go Go', 'developer' => 'Moonton'],
        ]);
    }
}