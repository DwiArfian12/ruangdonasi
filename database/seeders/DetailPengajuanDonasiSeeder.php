<?php

namespace Database\Seeders;

use App\Models\DetailPengajuanDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailPengajuanDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPengajuanDonasi::insert([
            ['pengajuan_donasi_id' => 1, 'jenis_donasi_id' => 2, 'jumlah_kebutuhan' => 54, 'satuan' => 'item'],
            ['pengajuan_donasi_id' => 1, 'jenis_donasi_id' => 7, 'jumlah_kebutuhan' => 54, 'satuan' => 'kg'],
            ['pengajuan_donasi_id' => 2, 'jenis_donasi_id' => 1, 'jumlah_kebutuhan' => 20, 'satuan' => 'porsi'],
            ['pengajuan_donasi_id' => 2, 'jenis_donasi_id' => 3, 'jumlah_kebutuhan' => 20, 'satuan' => 'porsi'],
        ]);
    }
}
