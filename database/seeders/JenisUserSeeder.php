<?php

namespace Database\Seeders;

use App\Models\JenisUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisUser::insert([
            ['jenis' => 'Admin'],
            ['jenis' => 'Donatur'],
            ['jenis' => 'Penerima Donasi']
        ]);
    }
}
