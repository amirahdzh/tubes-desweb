<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\PaymentMethod;
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

        // Buat form, kalau gamenya perlu input ID Server ga perlu dimasukin ke DB lagi
        Game::create([
            'type_id' => 1,
            'slug' => 'genshin-impact',
            'name' => 'Genshin Impact',
            'description' => '<p>
            Hanya butuh beberapa detik saja untuk membeli Genesis Crystals untuk Genshin
            Impact. Beli Primogems untuk "wish" atau supply bundles di dalam gift shop
            pakai Genesis Crystals. Kami dipercaya oleh jutaan gamers & pengguna aplikasi
            di Asia Tenggara termasuk di Indonesia. Caranya mudah, tanpa perlu registrasi
            ataupun log-in!.
          </p>
          
          <p><b>Tentang Genshin Impact:</b> <br>Jelajahi luasnya semesta penuh dengan petualangan dalam
          game open-world terbaru dari HoYoverse. Masuklah ke Tevyat, dunia yang penuh
          dengan kehidupan dan berbagai kekuatan. Kamu dan saudaramu sampai ke dunia ini
          dari semesta lain. Terpisahkan oleh Dewa yang masih menjadi misteri, kekuatanmu
          dirampas, dan dibuang ke dalam tidur yang sangat lelap, kemudian terbangun di
          dalam dunia yang sangat berbeda. Lalu kamu memulai petualanganmu melewati Teyvat
          untuk mencari jawaban dari Sang Ketujuh - Dewa dari segala elemen. Dalam
          perjalanan, persiapkan diri untuk menyusuri setiap sudut dunia yang menakjubkan,
          gabungkan kekuatan berbagai tipe karakter, dan ungkap misteri demi misteri
          Teyvat untuk menjawab semuanya.</p>',
            'image' => 'Genshin.png',
            'currency' => 'Genesis Crystals',
            'form' => 'ID Server',
            'image_cur' => 'genshin_gs.png'
        ]);

        Game::create([
            'type_id' => 2,
            'slug' => 'honkai-star-rail',
            'name' => 'Honkai: Star Rail',
            'description' => '<p>
            Hanya butuh beberapa detik saja untuk membeli Honkai: Star Rail Stellar Jades.
            Di GameHub, top-up dijamin mudah, aman, dan praktis. Kami dipercaya oleh
            jutaan gamers & pengguna aplikasi di Asia Tenggara termasuk di Indonesia.
            Caranya mudah, tanpa perlu registrasi, ataupun log-in!
          </p>
          <p>
            <b>Tentang Honkai: Star Rail:</b><br />
            "Honkai: Star Rail" adalah game RPG Fantasi Luar Angkasa terbaru dari
            HoYoverse Di game ini, pemain akan menaiki "Astral Express" dan menyaksikan
            keindahan galaksi yang ajaib dan fantastis, serta melakukan petualangan yang
            seru dan mendebarkan. Pemain akan bertemu dengan rekan-rekan baru dari
            berbagai dunia dan juga wajah-wajah yang familier. Bersama dengan mereka,
            pemain akan menyelesaikan masalah yang disebabkan oleh "Stellaron" serta
            mengungkap misteri yang ada di baliknya! Semoga perjalanan ini membawa kita
            menuju bintang-bintang!
          </p>',
            'image' => 'HonkaiStarRail.png',
            'currency' => 'Stellar Jade',
            'form' => 'Email',
            'image_cur' => 'hsr_jade.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'fifa-mobile',
            'name' => 'FIFA Mobile',
            'description' => '<p>
            Hanya butuh beberapa detik saja untuk membeli FIFA Points FIFA Mobile. Di
            GameHub, top-up dijamin mudah, aman, dan praktis. Kami dipercaya oleh jutaan
            gamers & pengguna aplikasi di Asia Tenggara termasuk di Indonesia. Caranya
            mudah, tanpa perlu registrasi, ataupun log-in!
          </p>
          <p>
            <b>Tentang FIFA Mobile:</b><br />
            EA SPORTS™ FIFA Mobile menghadirkan pengalaman terbaik untuk membangun tim
            impian bersama bintang sepak bola favorit Anda dan memulai perjalanan Anda ke
            berbagai liga.
          </p>
          <p>
            Bergabunglah dengan dunia kami dimana Anda dapat menemukan lebih dari 15,000
            pemain sepak bola otentik, ditambah 600+ tim.
          </p>
          <p>
            © 2022 Electronic Arts Inc. EA, EA SPORTS, dan logo EA SPORTS adalah merek
            dagang Electronic Arts Inc. Produk berlisensi resmi FIFA. © FIFA dan Logo
            Produk Berlisensi Resmi FIFA adalah hak cipta dan/atau merek dagang FIFA.
            Semua hak dilindungi undang-undang. Diproduksi di bawah lisensi dari
            Electronic Arts Inc. Memerlukan FIFA Mobile (diunduh terpisah) & semua
            pembaruan game. FIFA Mobile termasuk pembelian opsional dalam game (termasuk
            item acak).
          </p>
          ',
            'image' => 'FifaMobile.png',
            'currency' => 'FIFA Points',
            'form' => 'ID',
            'image_cur' => 'fifa_points.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'free-fire',
            'name' => 'Free Fire',
            'description' => '<p>
            Tinggal selangkah lagi! Dengan membeli Diamond, Kamu bisa menikmati beragam
            fitur dalam game, seperti membeli skin terbaru, item in-game premium, karakter
            baru, event eksklusif, dan masih banyak lagi!
          </p>
          <p>
            Mengapa memilih GameHub untuk top up Garena Free Fire (FF)? <br />
            Mudah & cepat, Kamu hanya perlu hitungan detik untuk menyelesaikan pembelian
            di GameHub. <br />Garansi sampai Diamond Free Fire dijamin langsung masuk ke
            akun Kamu. <br />Metode pembayaran mudah, Bayar dengan metode pembayaran
            terpopuler di Indonesia <br />Promo Menarik Jangan lewatkan deals terbaik,
            giveaways, dan masih banyak lagi, hanya di GameHub!
          </p>
          ',
            'image' => 'FreeFire.png',
            'currency' => 'Diamonds',
            'form' => 'ID',
            'image_cur' => 'freefire_diamonds.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'mobile-legends',
            'name' => 'Mobile Legends',
            'description' => 'asdjhajkdhsjad',
            'image' => 'MLBB.png',
            'currency' => 'Diamonds',
            'image_cur' => 'ml_diamond.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'valorant',
            'name' => 'Valorant',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Valo.png',
            'currency' => 'Points',
            'image_cur' => 'valo_points.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'super-sus',
            'name' => 'Super Sus',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Supersus.png',
            'currency' => 'Goldstars',
            'image_cur' => 'supersus_goldstars.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'league-of-legends-wild-rift',
            'name' => 'League of Legends: Wild Rift',
            'description' => 'asdjhajkdhsjad',
            'image' => 'LoL.png',
            'currency' => 'Wild Cores',
            'image_cur' => 'lol_wc.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'call-of-duty-mobile',
            'name' => 'Call of Duty: Mobile',
            'description' => 'asdjhajkdhsjad',
            'image' => 'CODM.png',
            'currency' => 'CP',
            'image_cur' => 'codm_cp.png'
        ]);

        Game::create([
            'type_id' => 2,
            'slug' => 'steam-wallet-code-indonesia',
            'name' => 'Steam Wallet Code',
            'description' => 'asdjhajkdhsjad',
            'image' => 'SteamWallet.png',
            'currency' => 'Wallet Code',
            'form' => 'Email',
            'image_cur' => 'money.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'state-of-survival',
            'name' => 'State of Survival',
            'description' => 'asdjhajkdhsjad',
            'image' => 'StateofSurvival.png',
            'currency' => 'Diamonds',
            'image_cur' => 'sos_diamonds.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'honkai-impact-3',
            'name' => 'Honkai Impact 3',
            'description' => 'asdjhajkdhsjad',
            'image' => 'Honkai.png',
            'currency' => 'Crystals',
            'image_cur' => 'honkai_crystals.png'
        ]);
        Game::create([
            'type_id' => 1,
            'slug' => 'point-blank',
            'name' => 'Point Blank',
            'description' => 'asdjhajkdhsjad',
            'image' => 'PB.png',
            'currency' => 'PB Cash',
            'image_cur' => 'pb_cash.png'
        ]);

        Game::create([
            'type_id' => 1,
            'slug' => 'astral-guardians-cyber-fantasy',
            'name' => 'Astral Guardians: Cyber Fantasy',
            'description' => 'asdjhajkdhsjad',
            'image' => 'AstralGuardians.png',
            'currency' => 'Diamonds',
            'image_cur' => 'diamonds.png'
        ]);

        PaymentMethod::create([
          'name' => 'ShopeePay',
          'image' => 'shopee.png'
        ]);

        PaymentMethod::create([
          'name' => 'Gopay',
          'image' => 'gopay.png'
        ]);

        PaymentMethod::create([
          'name' => 'DANA',
          'image' => 'dana.png'
        ]);

        PaymentMethod::create([
          'name' => 'OVO',
          'image' => 'ovo.png'
        ]);

        TopUp::factory()->count(100)->create();

        // TopUp::create([
        //     'game_id' => 1,
        //     'nominal' => 10,
        //     'price' => 10000
        // ]);
    }
}
