<?php

namespace Database\Seeders;

use App\Models\Solusi;
use Illuminate\Database\Seeder;

class SolusiSeeder extends Seeder
{
    public function run(): void
    {
        Solusi::create([
            'kode_solusi' => 'S01',
            'nama_solusi' => '<ol>
        <li>Makanan porsi kecil tapi sering.</li>
        <li>Diselingi dengan makanan seperti biskuit dengan teh.</li>
        <li>Hindari makanan berlemak karna dapat menyebabkan mual, sebaiknya mengkonsumsi makanan yang mengandung Vitamin C, vitamin B6, vitamin B1 dan vitamin B kompleks.</li>
    </ol>
    <p>Apabila ibu hamil setiap makan yang dimakan, dimuntahkan lagi dan mual terus menerus harus mendapatkan penanganan lebih serius oleh dokter atau bidan.</p>'
        ]);
        Solusi::create([
            'kode_solusi' => 'S02',
            'nama_solusi' => '<p>Penanganan utama yaitu dengan operasi pengangkatan jaringan pada ibu hamil dapat dilakuan dengan beberapa prosedur yaitu dengan kuret, pengangkatan rahim dan pemantauan HCG. Namun, prosedur tersebut dapat dikonsultasikan dulu dengan dokter ataupun bidan.</p>'
        ]);
        Solusi::create([
            'kode_solusi' => 'S03',
            'nama_solusi' => '<ol>
    <li>Ibu hamil yang mengalami pendarahan ringan sebainya melakukan istirahat dirumah dan dianjurkan untuk terus berbaring tidak banyak bergerak.</li>
    <li>Menghindari berhubungan seks dan berolahraga karena dapat memicu pendarahan.</li>
    <li>Apabila pendarahan banyak sebaiknya segera periksa ke dokter ataupun bidan.</li>
</ol>'
        ]);
        Solusi::create([
            'kode_solusi' => 'S04',
            'nama_solusi' => '-'
        ]);
        Solusi::create([
            'kode_solusi' => 'S05',
            'nama_solusi' => '<ol>
    <li>Perbanyak minum air putih.</li>
    <li>Jaga kebersihan pada saluran kencing.</li>
    <li>Mengkonsumsi vitamin c.</li>
    <li>Pemakaian antibiotik tetapi harus dengan dosis dari dokter.</li>
</ol>'
        ]);
        Solusi::create([
            'kode_solusi' => 'S06',
            'nama_solusi' => '<ol>
    <li>Mengkonsumsi buah-buahan yang mengandung asam folat seperti jeruk, alpukat, buah naga dan lain-lainnya.</li>
    <li>Mengkonsumsi sayur-sayuran.</li>
    <li>Mengkonsumsi suplemen zat besi dan menambah asupan vitamin c.</li>
</ol>'
        ]);
    }
}
