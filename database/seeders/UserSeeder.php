<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create([
            'photo' => 'https://img.icons8.com/?size=100&id=wG0B9eESqAAA&format=png&color=000000',
        ]);
    }
}
