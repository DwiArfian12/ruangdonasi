<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananDonasi extends Model
{
    use HasFactory;

    protected $fillable = ['keterangan', 'user_id', 'pengajuan_donasi_id', 'tanggal', 'status'];

    public function pengajuan_donasi() {
        return $this->belongsTo(PengajuanDonasi::class);
    }

    public function detail_pemesanan_donasis() {
        return $this->hasMany(DetailPemesananDonasi::class);
    }
}
