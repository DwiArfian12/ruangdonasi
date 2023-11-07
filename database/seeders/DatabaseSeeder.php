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
        $this->call(JenisUserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JenisDonasiSeeder::class);
        $this->call(PengajuanDonasiSeeder::class);
        $this->call(DetailPengajuanDonasiSeeder::class);
        $this->call(PemesananDonasiSeeder::class);
        $this->call(DetailPemesananDonasiSeeder::class);
    }
}
