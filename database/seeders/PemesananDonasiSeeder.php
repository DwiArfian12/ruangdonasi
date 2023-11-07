<?php

namespace Database\Seeders;

use App\Models\PemesananDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemesananDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PemesananDonasi::insert([
            ['keterangan' => 'Donasi untuk korban banjir, semoga membantu dengan donasi yang sedikit ini.', 'user_id' => 2, 'pengajuan_donasi_id' => 1, 'tanggal' => '2023-10-31', 'status' => 'Selesai'],
            ['keterangan' => 'Semoga berkah donasi dari saya ini.', 'user_id' => 3, 'pengajuan_donasi_id' => 1, 'tanggal' => '2023-11-04', 'status' => 'Proses'],
            ['keterangan' => 'Semoga berkah donasi dari saya ini.', 'user_id' => 3, 'pengajuan_donasi_id' => 2, 'tanggal' => '2023-11-06', 'status' => 'Tertunda'],
        ]);
    }
}
