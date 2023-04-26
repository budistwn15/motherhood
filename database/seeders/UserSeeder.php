<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Agnia Virli',
            'username' => 'agniavr',
            'email' => '1910631170003@student.unsika.ac.id',
            'password' => Hash::make('agniavr'),
            'is_admin' => true
        ]);
    }
}
