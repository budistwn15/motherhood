<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        Artikel::create([
            'judul' => 'Ragam Makanan Yang Mengandung Nutrisi Penting Untuk Ibu Hamil',
            'isi' => 'Pada trimester pertama, keinginan ngidam yang tak tertahankan kadang sampai membuat tubuh tidak nyaman. Namun, bukan berarti semua harus dituruti. Sah-sah saja jika Bunda ingin makanan manis atau keripik sesekali, tetapi ada cara supaya tubuh ibu dan janin tetap sehat dan tidak gampang lelah dibawa beraktivitas.',
            'link' => 'https://promkes.kemkes.go.id/ragam-makanan-yang-mengandung-nutrisi-penting-untuk-ibu-hamil-pk'
        ]);
        Artikel::create([
            'judul' => 'Manfaat Pemberian Asi Bagi Kesehatan Ibu',
            'isi' => 'ASI mengandung banyak nutrisi penting yang dibutuhkan bayi dalam tumbuh kembangnya. Mulai dari vitamin, protein, lemak, karbohidrat, dan berbagai mineral penting lainnya. Selain itu, pemberian kolostrum atau ASI yang pertama kali keluar sesaat setelah melahirkan juga sarat nutrisi dan antibodi untuk melindungi bayi dari infeksi. Selain itu kolostrum juga dapat membantu sistem pencernaan bayi agar berfungsi dengan baik.',
            'link' => 'https://promkes.kemkes.go.id/4-manfaat-pemberian-asi-bagi-kesehatan-ibu'
        ]);
        Artikel::create([
            'judul' => 'Tips bumil sehat saat ramadhan',
            'isi' => 'Puasa merupakan salah satu rukun Islam dan ibadah wajib bagi umat muslim di seluruh dunia. Namun, bagi ibu hamil, puasa bisa menjadi tantangan tersendiri yang cukup berat. Hal ini dikarenakan ibu hamil membutuhkan asupan nutrisi yang cukup untuk kesehatan diri dan juga calon bayi yang ada di kandungannya.',
            'link' => 'https://promkes.kemkes.go.id/tips-bumil-sehat-saat-ramadhan'
        ]);
    }
}
