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
            akun Kamu. <br />Metode pembayaran mudah, bayar dengan metode pembayaran
            terpopuler di Indonesia. <br />Jangan lewatkan deals terbaik,
            giveaways, dan masih banyak lagi, hanya di GameHub!
            <br><b>Tentang Free Fire:</b>
            <p>Free Fire adalah permainan battle royale yang dikembangkan oleh 111 Dots Studio 
            dan diterbitkan oleh Garena untuk Android dan iOS. Permainan ini merupakan permainan 
            piranti genggam yang paling banyak diunduh secara global pada tahun 2019.</p>
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
      'description' => '<p>Top up ML Diamond hanya dalam hitungan detik! Cukup masukan User ID 
      dan Zone ID MLBB Anda, pilih jumlah Diamond yang Anda inginkan, selesaikan pembayaran, 
      dan Diamond akan secara langsung ditambahkan ke akun Mobile Legends Anda.</p>',
      'image' => 'MLBB.png',
      'currency' => 'Diamonds',
      'image_cur' => 'ml_diamond.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'valorant',
      'name' => 'Valorant',
      'description' => '<p>Anda dapat melakukan top up Valorant Points dengan mudah dan cepat! 
      Cukup masukkan Riot ID dan Server Region Valorant Anda, pilih jumlah Valorant Points 
      yang Anda inginkan, selesaikan pembayaran, dan Valorant Points akan langsung 
      ditambahkan ke akun Valorant Anda.</p>',
      'image' => 'Valo.png',
      'currency' => 'Points',
      'image_cur' => 'valo_points.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'super-sus',
      'name' => 'Super Sus',
      'description' => '<p>Beli Golden Star Super Sus hanya dalam hitungan detik! Cukup masukkan 
      ID Space Super Sus Kamu, pilih jumlah Golden Star yang kamu inginkan, selesaikan pembayaran, 
      dan Golden Star tersebut akan langsung masuk ke akun Super Sus Kamu.</p>',
      'image' => 'Supersus.png',
      'currency' => 'Goldstars',
      'image_cur' => 'supersus_goldstars.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'league-of-legends-wild-rift',
      'name' => 'League of Legends: Wild Rift',
      'description' => '<p>Nikmati permainan seru League of Legends: Wild Rift dengan memperoleh 
      Wild Cores secara cepat dan mudah! Hanya dalam beberapa langkah sederhana, Anda dapat 
      top up Wild Cores dan mendapatkan keuntungan tambahan di dalam permainan.<br>

      Cukup masukkan Summoner ID dan Server Region Wild Rift Anda, pilih jumlah Wild Cores yang 
      Anda inginkan, selesaikan pembayaran, dan Wild Cores akan secara langsung ditambahkan 
      ke akun Wild Rift Anda.</p>',
      'image' => 'LoL.png',
      'currency' => 'Wild Cores',
      'image_cur' => 'lol_wc.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'call-of-duty-mobile',
      'name' => 'Call of Duty: Mobile',
      'description' => '<p>
      Siapkan senjata Anda dan bergabunglah dalam pertempuran intens di Call of Duty Mobile! 
      Dapatkan CP (Call of Duty Points) dengan cepat dan mudah untuk meningkatkan pengalaman 
      permainan Anda. <br> Hanya dengan beberapa langkah sederhana, Anda dapat melakukan top up 
      CP untuk Call of Duty Mobile. Masukkan ID akun Anda, pilih jumlah CP yang Anda inginkan, 
      selesaikan pembayaran, dan CP akan langsung ditambahkan ke akun Call of Duty Mobile Anda.
      </p>',
      'image' => 'CODM.png',
      'currency' => 'CP',
      'image_cur' => 'codm_cp.png'
    ]);

    Game::create([
      'type_id' => 2,
      'slug' => 'steam-wallet-code-indonesia',
      'name' => 'Steam Wallet Code',
      'description' => '
      <p>Anda dapat dengan mudah menambah saldo Steam Wallet Anda untuk membeli permainan, 
      DLC (konten unduhan), item dalam permainan, dan banyak lagi. Berikut adalah langkah-langkah 
      untuk melakukan top up saldo Steam Wallet:</p>
      <ol>
      <li>Buka aplikasi Steam atau kunjungi situs web resmi Steam.</li>
      <li>Login ke akun Steam Anda atau buat akun baru jika Anda belum memiliki satu.</li>
      <li>Setelah masuk, pilih opsi "Add Funds to your Steam Wallet" atau "Add Funds" yang biasanya dapat ditemukan di bagian atas atau bawah halaman.</li>
      <li>Anda akan diarahkan ke halaman top up Steam Wallet. Di sini, Anda dapat memilih jumlah saldo yang ingin Anda tambahkan ke akun Anda.</li>
      <li>Pilih metode pembayaran yang Anda inginkan. Steam menyediakan berbagai opsi pembayaran, termasuk kartu kredit/debit, PayPal, dompet elektronik, dan banyak lagi. Pilihlah metode yang paling sesuai dengan preferensi Anda.</li>
      <li>Ikuti petunjuk dan langkah-langkah yang diberikan untuk menyelesaikan pembayaran. Pastikan untuk mengisi informasi yang diminta dengan benar.</li>
      <li>Setelah pembayaran selesai, saldo Steam Wallet Anda akan langsung ditambahkan ke akun Anda. Anda dapat menggunakan saldo tersebut untuk membeli permainan atau item di Steam Store.</li>
      </ol><p>
      Pastikan untuk memeriksa saldo Steam Wallet Anda setelah top up untuk memastikan bahwa saldo telah ditambahkan 
      dengan benar. Dengan saldo Steam Wallet yang terisi, Anda dapat dengan mudah menjelajahi toko Steam dan 
      menikmati berbagai permainan dan konten yang tersedia.
      </p>',
      'image' => 'SteamWallet.png',
      'currency' => 'Wallet Code',
      'form' => 'Email',
      'image_cur' => 'money.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'state-of-survival',
      'name' => 'State of Survival',
      'description' => '<p>Anda dapat meningkatkan pengalaman bermain State of Survival dengan melakukan 
      top up Diamonds secara cepat dan mudah. Dengan Diamonds yang ditambahkan, Anda dapat menggunakan 
      mereka untuk memperoleh keuntungan dalam permainan seperti membeli item, mempercepat progresi, atau 
      mendapatkan sumber daya tambahan dalam State of Survival.</p>',
      'image' => 'StateofSurvival.png',
      'currency' => 'Diamonds',
      'image_cur' => 'sos_diamonds.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'honkai-impact-3',
      'name' => 'Honkai Impact 3',
      'description' => '<p>
      Anda dapat dengan mudah meningkatkan pengalaman bermain Honkai Impact 3 dengan melakukan top up 
      Crystals dalam hitungan detik. Cukup masukkan akun game Anda, pilih paket Crystals yang diinginkan, 
      lakukan pembayaran, dan Kristal akan langsung ditambahkan ke akun Honkai Impact 3 Anda. Dengan begitu, 
      Anda dapat memanfaatkan Kristal untuk membeli item, memperkuat karakter, dan mendapatkan keuntungan 
      lainnya dalam permainan.</p>',
      'image' => 'Honkai.png',
      'currency' => 'Crystals',
      'image_cur' => 'honkai_crystals.png'
    ]);
    Game::create([
      'type_id' => 1,
      'slug' => 'point-blank',
      'name' => 'Point Blank',
      'description' => '<p>
      Anda dapat meningkatkan pengalaman bermain Point Blank dengan melakukan top up Point Blank Cash 
      (PB Cash) dalam hitungan detik. Cukup masukkan akun game Anda, pilih jumlah PB Cash yang Anda inginkan, 
      lakukan pembayaran, dan PB Cash akan secara langsung ditambahkan ke akun Point Blank Anda. Dengan PB Cash 
      yang ditambahkan, Anda dapat memanfaatkannya untuk membeli senjata, karakter, item, dan aksesori dalam 
      permainan. Nikmati keuntungan dari top up PB Cash yang cepat dan mudah, dan tingkatkan kemampuan dan koleksi 
      Anda dalam pertempuran di Point Blank.</p>',
      'image' => 'PB.png',
      'currency' => 'PB Cash',
      'image_cur' => 'pb_cash.png'
    ]);

    Game::create([
      'type_id' => 1,
      'slug' => 'astral-guardians-cyber-fantasy',
      'name' => 'Astral Guardians: Cyber Fantasy',
      'description' => '<p>
      Anda dapat meningkatkan pengalaman bermain Astral Guardians dengan melakukan top up Diamonds dalam hitungan 
      detik. Cukup masukkan akun game Anda, pilih jumlah Diamonds yang Anda inginkan, lakukan pembayaran, dan 
      Diamonds akan secara langsung ditambahkan ke akun Astral Guardians Anda. Dengan Diamonds yang ditambahkan, 
      Anda dapat memanfaatkannya untuk membeli item langka, karakter baru, dan meningkatkan kekuatan Anda dalam 
      pertempuran. Jadi, jangan lewatkan kesempatan untuk memperoleh keuntungan dalam permainan Astral Guardians 
      dengan melakukan top up Diamonds yang cepat dan praktis.</p>',
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
