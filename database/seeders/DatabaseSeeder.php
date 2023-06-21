<?php

namespace Database\Seeders;
use App\Models\Game;
use App\Models\TopUp;
use App\Models\Type;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Type::create([ // type_id = 1
            'name' => 'top-up'
        ]);

        Type::create([ // type_id = 2
            'name' => 'voucher'
        ]);
        
        Game::create([
            'type_id' => 1,
            'slug' => 'genshin-impact',
            'name' => 'Genshin Impact',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Genesis Crystals'
        ]);

        Game::create([
            'type_id' => 2,
            'slug' => 'honkai-star-rail',
            'name' => 'Honkai: Star Rail',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Stellar Jade'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'fifa-mobile',
            'name' => 'FIFA Mobile',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Primo Gems'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'free-fire',
            'name' => 'Free Fire',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Diamonds'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'mobile-legends',
            'name' => 'Mobile Legends',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Primo Gems'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'valorant',
            'name' => 'Valorant',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Points'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'super-sus',
            'name' => 'Super Sus',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Goldstars'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'league-of-legends-wild-rift',
            'name' => 'League of Legends: Wild Rift',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Wild Cores'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'call-of-duty-mobile',
            'name' => 'Call of Duty: Mobile',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'CP'
        ]);

        Game::create([
            'type_id' => 2,
            'slug' => 'steam-wallet-code-indonesia',
            'name' => 'Steam Wallet Code',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Wallet Code'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'state-of-survival',
            'name' => 'State of Survival',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Diamonds'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'honkai-impact-3',
            'name' => 'Honkai Impact 3',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Crystals'
        ]);
        Game::create([
            'type_id' => 1,
            'slug' => 'point-blank',
            'name' => 'Point Blank',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'PB Cash'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'astral-guardians-cyber-fantasy',
            'name' => 'Astral Guardians: Cyber Fantasy',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Genshin.png',
            'currency' => 'Diamonds'
        ]);

        TopUp::create([
            'game_id' => 1,
            'nominal' => 10,
            'price' => 10000
        ]);
        
    }
}
