<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class GejalaPenyakitSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'gejala_penyakit';
        $this->filename = base_path().'/database/seeders/csv/gejala-penyakit.csv';
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
