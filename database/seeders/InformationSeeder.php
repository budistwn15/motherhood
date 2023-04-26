<?php

namespace Database\Seeders;

use App\Models\Informasi;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    public function run(): void
    {
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '1.png'
        ]);
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '2.png'
        ]);
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '3.png'
        ]);
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '4.png'
        ]);
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '5.png'
        ]);
        Informasi::create([
            'nama' => 'Wabah Corona Ibu Hamil Tetap Sehat Bebas Anemia',
            'keterangan' => '',
            'gambar' => '6.png'
        ]);
        Informasi::create([
            'nama' => 'Setiap Makan Isi Piringku Kaya Protein Hewani',
            'keterangan' => '',
            'gambar' => '7.png'
        ]);
    }
}
