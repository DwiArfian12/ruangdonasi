<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengajuanDonasi extends Model
{
    use HasFactory;

    protected $fillable = ['pengajuan_donasi_id', 'jenis_donasi_id', 'jumlah_kebutuhan', 'satuan'];

    public function jenis_donasi() {
        return $this->belongsTo(JenisDonasi::class);
    }
}
