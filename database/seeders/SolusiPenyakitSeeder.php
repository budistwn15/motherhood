<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class SolusiPenyakitSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'penyakit_solusi';
        $this->filename = base_path().'/database/seeders/csv/solusi-penyakit.csv';
        $this->should_trim = true;
        $this->timestamps = true;
        $this->created_at = now();
        $this->updated_at = now();
    }

    public function run()
    {
        parent::run();
    }
}
