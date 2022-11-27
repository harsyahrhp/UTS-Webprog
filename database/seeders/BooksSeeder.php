<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id' => 1,
                'title' => 'Dilan 1990',
                'author' => 'Pidi Baiq',
                'year' => 1990,
                'synopsis' => 'Cinta, walaupun sudah berlalu sekian lama, tetap saja, saat dikenang begitu manis. Milea, dia kembali ke tahun 1990 untuk menceritakan seorang laki-laki yang pernah menjadi seseorang yang sangat dicintainya, Dilan.',
                'image' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1529766227/dilan1_rgsiyd.jpg',
            ],
            [
                'publisher_id' => 1,
                'title' => 'Dilan 1991',
                'author' => 'Pidi Baiq',
                'year' => 1991,
                'synopsis' => 'Berawal dari Wati yang main ke rumah Milea bersama Piyan. Dari sini, Wati mulai bercerita masa lalu Dilan yang penuh kenakalan dan kelucuan. Hubungan Milea dan Dilan mendapatkan banyak ujian. Salah satunya, Milea mendapatkan surat dari Beni-mantan pacar ',
                'image' => 'https://www.bukukita.com/babacms/displaybuku/86106_f.jpg',
            ],
            [
                'publisher_id' => 1,
                'title' => 'Milea',
                'author' => 'Pidi Baiq',
                'year' => 1992,
                'synopsis' => 'Setelah SMA, Dilan ke sekolah tidak lagi naik sepeda melainkan naik motor. Pulangnya nongkrong di warung Kang Ewok. Di sana, dia biasa berkumpul dengan teman-temannya yang bernama Akew, Bowo, Anhar, Burhan, Ivan, dan lain-lain. Dilan juga sering nongkrong',
                'image' => 'https://assets-a1.kompasiana.com/items/album/2019/03/25/img-20190325-wa0009-5c98787495760e3f4d368524.jpg?t=o&v=770',
            ],
            [
                'publisher_id' => 2,
                'title' => 'Inspirational Ideas for Home Cooking ala Xanders Kitchen',
                'author' => 'Junita',
                'year' => 2022,
                'synopsis' => 'Sama dengan buku pertama, lebih dari 100 resep di buku ini juga dibagi dalam kelompok hidangan, seperti Sop dan Soto; Nasi Mie dan Bihun; Sayur; Ikan, Daging; Ayam; dan sebagainya. Resep-resep yang yang tersaji di buku sebagian besar adalah resep keluarga',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020658605_XK3_final_OK_C_1_4_R4.jpg',
            ],
            [
                'publisher_id' => 2,
                'title' => 'Mommyclopedia 89 Resep Makanan Anak 2-5 Tahun',
                'author' => 'dr. Meta Hanindita, Sp.A',
                'year' => 2022,
                'synopsis' => 'Para ibu tentu pernah kehabisan ide untuk menu makanan si kecil, terutama untuk balita. Tenang saja, di buku Mommyclopedia 89 Resep Makanan Anak 2-5 Tahun, bunda bisa menemukan ide masakan untuk anak-anak yang tentunya juga mengandung nutrisi.',
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020657905_78_RESEP_MPASI_ANAK_2_5_TAHUN_C_1_4-1.jpg',
            ],
            [
                'publisher_id' => 2,
                'title' => '70 Resep Easy Cook: Praktis, Halal & Non-MSG',
                'author' => 'Yunita Anwar',
                'year' => '2021',
                'synopsis' => 'Memasak hidangan yang lezat, sehat, dan praktis merupakan keinginan kita semua. Terlebih masakan rumah selalu menghadirkan kesan istimewa dan selalu dirindukan oleh keluarga. Lewat buku ini, Yunita Anwar, yang aktif di akun Instagram @yunitaanwar dan baru',
                'image' => 'https://cdn.gramedia.com/uploads/items/COVER_YUNITA_ANWAR_C_1_4_R4-1.jpg',
            ],

        ]);
    }
}
