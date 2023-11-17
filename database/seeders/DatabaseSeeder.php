<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\USer;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Post::factory(10)->create();
        Category::create([
            'id' => 3,
            'name' => 'Gaya Hidup',
            'slug' => 'gaya-hidup'

        ]);


        // Category::create([
        //     'id' => 4,
        //     'name' => 'Makanan',
        //     'slug' => 'makanan'

        // ]);

        // Category::create([
        //     'id' => 2,
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'

        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'

        // ]);
        // User::create([
        //     'name' => 'Krisna Astika',
        //     'username' => 'ferodia',
        //     'email' => 'Krisnaastika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rio Nandika',
        //     'username' => 'Ryuna',
        //     'email' => 'Rionandika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Kenapa Pemrograman?',
        //     'slug' => 'kenapa-pemrograman',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Pemrograman adalah seni dan ilmu dalam menciptakan perangkat lunak yang dapat menjalankan tugas-tugas tertentu',
        //     'body' => '<p>Selamat Datang di Dunia Pemrograman!</p><p>Pemrograman adalah seni dan ilmu dalam menciptakan perangkat lunak yang dapat menjalankan tugas-tugas tertentu. Ini melibatkan penulisan kode komputer menggunakan bahasa pemrograman yang berbeda-beda.</p><p><strong>Kenapa Belajar Pemrograman?</strong></p><p>Pemrograman adalah keterampilan yang sangat berharga di era digital ini. Anda dapat membangun situs web, aplikasi seluler, perangkat lunak desktop, dan banyak lagi. Pemrograman memberi Anda kekuatan untuk mengubah ide-ide menjadi kenyataan.</p><p><strong>Jenis-Jenis Bahasa Pemrograman</strong></p><p>Ada berbagai jenis bahasa pemrograman, seperti Python, JavaScript, Java, C++, dan banyak lainnya. Setiap bahasa memiliki kegunaan dan kelebihan masing-masing. Pilihlah bahasa pemrograman yang sesuai dengan proyek Anda.</p><p><strong>Dasar-Dasar Pemrograman</strong></p> <p>Dasar-dasar pemrograman termasuk variabel, pengkondisian, perulangan, dan struktur data. Anda perlu memahami konsep-konsep ini untuk memulai menulis kode.</p><p><strong>Belajar Melalui Praktek</strong></p><p>Cara terbaik untuk belajar pemrograman adalah melalui praktek. Cobalah memecahkan masalah sederhana dengan menulis kode. Praktek akan membantu Anda memahami konsep-konsep pemrograman dengan lebih baik.</p><p><strong>Sumber Belajar</strong></p><p>Ada banyak sumber belajar pemrograman, termasuk buku, kursus online, tutorial, dan komunitas online. Manfaatkan sumber-sumber ini untuk meningkatkan keterampilan pemrograman Anda.</p><p><strong>Berpartisipasi dalam Proyek</strong></p> <p>Bergabung dalam proyek open source atau membuat proyek pribadi adalah cara bagus untuk mempraktikkan keterampilan pemrograman Anda. Ini juga membantu Anda membangun portofolio yang kuat.</p><p><strong>Terus Belajar</strong></p><p>Pemrograman terus berkembang, jadi penting untuk terus belajar dan mengikuti perkembangan teknologi. Jangan pernah berhenti belajar.</p><p><strong>Kesimpulan</strong></p><p>Pemrograman adalah keterampilan yang sangat berharga dalam dunia digital. Dengan tekad dan latihan yang konsisten, Anda dapat menjadi seorang pemrogram yang handal dan berhasil. Selamat belajar!</p>'
        // ]);
        
        // Post::create([
        //     'title' => 'Panduan Design Web Efektif',
        //     'slug' => 'panduan-design-web-efektif',
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'excerpt' => 'Desain web adalah elemen penting dalam pembuatan situs web yang menarik dan fungsional. Apakah Anda seorang pemula atau seorang desainer berpengalaman',
        //     'body' => '<p>Desain web adalah elemen penting dalam pembuatan situs web yang menarik dan fungsional. Apakah Anda seorang pemula atau seorang desainer berpengalaman, ini adalah panduan yang akan membantu Anda menciptakan desain web yang efektif.</p><p>Pertama, pemahami audiens target Anda dengan baik. Sebelum Anda mulai merancang situs web, penting untuk memahami siapa target audiens Anda. Ini akan memengaruhi gaya dan tampilan situs Anda, sehingga pastikan Anda memahami kebutuhan dan preferensi mereka.</p><p>Selanjutnya, pastikan desain web Anda responsif dan mobile-friendly. Dengan semakin banyak orang mengakses internet melalui perangkat seluler, responsivitas adalah kunci. Pastikan situs web Anda dapat mengadaptasi tampilan dengan baik pada berbagai perangkat, menjadikan pengalaman pengguna yang baik.</p>'
        // ]);
        
        // Post::create([
        //     'title' => 'Menjelajahi Dunia Makanan',
        //     'slug' => 'menjelajahi-dunia-makanan',
        //     'category_id' => 4,
        //     'user_id' => 1,
        //     'excerpt' => 'Makanan bukan sekadar kebutuhan; ia adalah pengalaman budaya dan indra yang menghubungkan orang dari seluruh dunia.',
        //     'body' => '<p>Makanan bukan sekadar kebutuhan; ia adalah pengalaman budaya dan indra yang menghubungkan orang dari seluruh dunia. Dari makanan jalanan pedas di Bangkok hingga hidangan kuliner gourmet di Paris, dunia makanan begitu luas dan beragam.</p><p>Salah satu aspek paling menarik dari makanan adalah kemampuannya untuk bercerita. Setiap hidangan membawa sejarah dan tradisi yang mencerminkan daerah asalnya. Entah itu cita rasa kaya pasta Italia atau rempah-rempah harum kari India, makanan adalah perjalanan melalui budaya dan rasa.</p><p>Menjelajahi dunia makanan adalah petualangan yang bisa dijalani siapa pun. Baik Anda mencoba resep baru di rumah, makan di restoran lokal, atau bepergian ke tempat-tempat jauh untuk mencicipi hidangan eksotis, dunia kuliner penuh dengan kejutan dan kenikmatan yang menunggu untuk ditemukan.</p>'
        // ]);
        
    }
}
