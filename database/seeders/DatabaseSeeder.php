<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(GejalaSeeder::class);
        $this->call(PenyakitSeeder::class);
        $this->call(SolusiSeeder::class);
        $this->call(GejalaPenyakitSeeder::class);
        $this->call(SolusiPenyakitSeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(InformationSeeder::class);
    }
}
