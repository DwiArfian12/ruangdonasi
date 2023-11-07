<?php

namespace Database\Seeders;

use App\Models\JenisDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisDonasi::insert([
            ['jenis' => 'Makanan Matang', 'keterangan' => 'Makanan atau minuman yang siap/dapat langsung dikonsumsi tanpa perlu diolah terlebih dahulu, seperti nasi bungkus, es teh, dsb.'],
            ['jenis' => 'Makanan Instan', 'keterangan' => 'Makanan atau minuman instan yang mudah disiapkan, seperti mie instan, pop mie, kopi saschet, teh celup, dsb.'],
            ['jenis' => 'Cepat Saji', 'keterangan' => 'Makanan atau minuman instan yang cepat disajikan, seperti restauran ayam krispi, roti ham, soft drink, dsb.'],
            ['jenis' => 'Makanan Kaleng', 'keterangan' => 'Makanan atau minuman dalam kemasan kaleng yang aman dikonsumsi jangka panjang, seperti sarden, kornet, dsb.'],
            ['jenis' => 'Makanan Ringan', 'keterangan' => 'Makanan atau minuman ringan atau snack untuk mengganjal lapar atau sekedar camilan, seperti roti, keripik, kentang goreng, biskuit, dsb.'],
            ['jenis' => 'Lauk Pauk', 'keterangan' => 'Lauk pauk yang biasa sebagai pendamping nasi, seperti telur goreng, tahu, tempe, ikan goreng, ayam goreng, dsb.'],
            ['jenis' => 'Makanan Pokok', 'keterangan' => 'Makanan pokok/mentahan, seperti beras, telur, jagung, kentang, singkong, buah-buahan, dsb.'],
            ['jenis' => 'Lainnya', 'keterangan' => 'Makanan atau minuman lainnya yang halal, umum, dan layak dikonsumsi.'],
        ]);
    }
}
