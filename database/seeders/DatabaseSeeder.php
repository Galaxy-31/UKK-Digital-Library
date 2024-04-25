<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@smkwikrama1garut.sch.id',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'image' => 'user.jpg',
        ]);

        //User 1
        \App\Models\User::factory()->create([
            'name' => 'Agus Cahyono',
            'username' => 'Agus',
            'email' => '12100701@smkwikrama1garut.sch.id',
            'password' => bcrypt('12100701'),
            'role' => 'visitor',
            'image' => 'user1.jpg',
        ]);
        //EndUser1
        //User 2
        \App\Models\User::factory()->create([
            'name' => 'Amelia Putri',
            'username' => 'Amelia',
            'email' => '12100702@smkwikrama1garut.sch.id',
            'password' => bcrypt('12100702'),
            'role' => 'visitor',
            'image' => 'user2.jpg',
        ]);
        //EndUser2
        //User 3
        \App\Models\User::factory()->create([
            'name' => 'Razky Dwi',
            'username' => 'Razky',
            'email' => '12100703@smkwikrama1garut.sch.id',
            'password' => bcrypt('12100703'),
            'role' => 'visitor',
            'image' => 'user3.jpg',
        ]);
        //EndUser2
        

        Category::factory()->create([
            'name' => 'Novel',
            'slug' => 'novel',
            'image' => 'novel.jpg',
        ]);
        Category::factory()->create([
            'name' => 'Kartun',
            'slug' => 'kartun',
            'image' => 'kartun.jpg',
        ]);
        Category::factory()->create([
            'name' => 'Agama',
            'slug' => 'agama',
            'image' => 'agama.jpg',
        ]);
        Books::factory()->create([
            'title' => 'Angkasa 56',
            'slug' => '"Bumi Manusia',
            'kode_buku' => "0082973886243",
            'category_id' => '1',
            'user_id' => '1',
            'penulis' => 'Pramoedya Ananta Toer ',
            'description' => 'Angkasa 56" adalah judul buku karya Tere Liye yang mengisahkan tentang petualangan remaja di dunia fiksi ilmiah. Di dalam cerita, sekelompok anak muda yang tergabung dalam klub Angkasa 56, yang merupakan klub astronomi di sekolah mereka, menemukan sebuah objek misterius di angkasa.

            Objek tersebut ternyata adalah kapal luar angkasa yang tersembunyi di balik asteroid. Ketika mereka berhasil masuk ke dalam kapal tersebut, mereka menemukan bahwa kapal tersebut adalah milik peradaban luar angkasa yang jauh lebih maju. Mereka bertemu dengan makhluk-makhluk asing yang ramah dan berusaha memahami teknologi dan budaya dari peradaban tersebut.
            
            Selama petualangan mereka di kapal luar angkasa ini, para remaja tersebut belajar banyak hal tentang persahabatan, keberanian, dan juga tanggung jawab. Mereka juga harus menghadapi berbagai tantangan dan rintangan, termasuk ancaman dari pihak-pihak yang ingin menguasai teknologi canggih yang ada di kapal tersebut.
            
            "Angkasa 56" menggabungkan unsur fiksi ilmiah dengan nilai-nilai moral dan petualangan yang seru, membuatnya menjadi novel yang menarik untuk dibaca bagi penggemar cerita-cerita tentang dunia luar angkasa dan petualangan fantastis.',
            'image' => 'Angkasa 56 Hari.png',
            'penerbit' => 'Gramedia',
            'stok' => '1',
            'thn_terbit' => '2024/04/22',
            // 'file'=> 'Berani Bahagia .pdf',
        ]);
        Books::factory()->create([
            'title' => 'Si Kancil',
            'slug' => '"Binatang',
            'kode_buku' => "0082368835",
            'category_id' => '2',
            'user_id' => '1',
            'penulis' => 'Dimas Harlan',
            'description' => 'Dongeng si Kancil memang sangat digemari tua dan muda. Dongeng fabel dengan tokoh utama si Kancil yang cerdik ini selalu bisa menghibur pembacanya. Karakter si Kancil yang banyak akal membuat jalan cerita jadi menarik dan membuat penasaran. Dalam beberapa dongeng, Si Kancil selalu dicari ketika ada masalah yang perlu dipecahkan.',
            'image' => 'si kancil.png',
            'penerbit' => 'Dongeng',
            'stok' => '2',
            'thn_terbit' => '2024/04/22',
            // 'file'=> 'Berani Bahagia .pdf',
        ]);
        Books::factory()->create([
            'title' => 'AZZAMINE',
            'slug' => 'Azzamine',
            'kode_buku' => "008927356335",
            'category_id' => '1',
            'user_id' => '1',
            'penulis' => 'Sophie Aulia',
            'description' => 'Sophie Aulia menuliskan buku Azzamine ini dengan gaya bahasa yang dinilai indah dan mudah dimengerti. Meskipun cerita ini mulanya dalam bentuk alternative universe, tetapi Sophie Aulia dinilai mampu mengubahnya menjadi sebuah novel yang sangat menarik untuk dibaca.

            Alur cerita Azzamine tidak terlalu cepat dan tidak terlalu lambat juga. Narasi cerita ini juga dinilai jelas dan mendetail. Oleh karena itu, pembaca menemukan buku ini menjadi tidak membosankan, malah ingin terus dan terus untuk dibaca kelanjutannya.
            
            Konfliknya yang diangkat dalam cerita ini juga tidak terlalu berat, sehingga pembaca dapat menikmati dengan santai ketika membacanya. Selain itu, konflik yang cukup ringan ini membuat novel ini mudah untuk dimengerti.
            
            Buku Azzamine ini bukan hanya novel romansa yang menonjolkan sisi romantis ala remaja yang bikin senyum-senyum dan hati berbunga-bunga saja. Namun, novel Azzamine ini dinilai sangat sarat akan makna. Banyak hal yang dapat dipelajari, seperti hikmah dari setiap konflik yang ditemukan para tokohnya.
            
            Sophie Aulia dinilai mampu untuk membangun karakter yang menarik. Karakter tokoh yang juga dapat menjadi teladan bagi para pembaca. Seperti, tokoh Azzam yang penyabar, dan tokoh Sophie yang ingin berubah menjadi lebih baik.
            
            Sampul dan gambar ilustrasi yang ada di buku Azzamine ini dinilai sangat cantik dan menarik. Gambar sampul buku ini penuh warna dengan pemandangan alam dan ilustrasi dua sejoli. Ilustrasi dalam buku Azzamine dinilai semakin mendukung narasi cerita menjadi lebih menarik.
            
            Buku Azzamine ini sangat cocok untuk dibaca oleh kaum remaja, untuk mengisi waktu luang. Lebih terkhusus lagi, untuk remaja muslim, karena banyak pelajaran yang terkait dengan pengajaran islami yang bisa dipetik dari kisah cinta Azzamine.',
            'image' => 'Azzamine.jpg',
            'penerbit' => 'Gramedia',
            'stok' => '2',
            'thn_terbit' => '2022/04/22',
        ]);
    }
}
