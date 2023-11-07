<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisDonasi extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_makanan', 'keterangan_makanan'];

    public function detail_pengajuan_donasis() {
        return $this->hasMany(DetailPengajuanDonasi::class);
    }

    public function detail_pemesanan_donasis() {
        return $this->hasMany(DetailPemesananDonasi::class);
    }
}
