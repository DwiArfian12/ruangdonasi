<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesananDonasi extends Model
{
    use HasFactory;

    protected $fillable = ['jumlah_donasi', 'pemesanan_donasi_id', 'jenis_donasi_id'];

    public function jenis_donasi() {
        return $this->belongsTo(JenisDonasi::class);
    }

    public function pemesanan_donasi() {
        return $this->belongsTo(PemesananDonasi::class);
    }
}
