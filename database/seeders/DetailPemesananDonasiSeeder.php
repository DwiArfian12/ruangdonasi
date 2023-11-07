<?php

namespace Database\Seeders;

use App\Models\DetailPemesananDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPemesananDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPemesananDonasi::insert([
            ['jumlah_donasi' => 20, 'pemesanan_donasi_id' => 1, 'jenis_donasi_id' => 2],
            ['jumlah_donasi' => 20, 'pemesanan_donasi_id' => 1, 'jenis_donasi_id' => 7],
            ['jumlah_donasi' => 12, 'pemesanan_donasi_id' => 2, 'jenis_donasi_id' => 1],
            ['jumlah_donasi' => 12, 'pemesanan_donasi_id' => 1, 'jenis_donasi_id' => 3],
        ]);
    }
}
