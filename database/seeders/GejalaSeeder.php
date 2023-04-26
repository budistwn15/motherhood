<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class GejalaSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'gejalas';
        $this->filename = base_path().'/database/seeders/csv/gejala.csv';
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
