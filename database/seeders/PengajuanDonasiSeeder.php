<?php

namespace Database\Seeders;

use App\Models\PengajuanDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PengajuanDonasi::insert([
            ['judul' => 'Butuh Bantuan Makanan untuk Korban Banjir di Kulon Progo', 'keterangan' => 'Di Kulon Progo, sebuah daerah terkena dampak dari banjir yang menghantam wilayah tersebut. Di tengah kondisi darurat ini, warga setempat membutuhkan bantuan makanan yang mendesak. Sayangnya, judul ini tidak menyebutkan jumlah korban banjir, sehingga kita tidak memiliki informasi pasti tentang seberapa besar dampaknya. Namun, dalam upaya membantu masyarakat yang terdampak, bantuan makanan sangat dibutuhkan untuk memenuhi kebutuhan dasar mereka. Dengan solidaritas dan dukungan dari masyarakat luas, kita dapat memberikan bantuan yang dibutuhkan dan membantu meringankan penderitaan mereka di tengah krisis banjir ini.', 'tanggal' => '2023-10-01', 'status' => 'disetujui', 'user_id' => 4],
            ['judul' => 'Puluhan Rumah Warga Terimbun Longsor di Imogiri', 'keterangan' => 'Imogiri mengalami bencana longsor yang mengakibatkan terimbunnya puluhan rumah warga. Situasi darurat ini membutuhkan respons cepat dan koordinasi untuk menyelamatkan korban yang terperangkap, memberikan pertolongan medis, serta menyediakan tempat perlindungan sementara bagi warga yang terdampak. Bantuan dan dukungan dari pihak berwenang serta masyarakat sangat diperlukan untuk membantu para korban dalam menghadapi situasi yang sulit ini.', 'tanggal' => '2023-11-01', 'status' => 'menunggu konfirmasi', 'user_id' => 5],
        ]);
    }
}
