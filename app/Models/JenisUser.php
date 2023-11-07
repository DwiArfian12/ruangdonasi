<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisUser extends Model
{
    use HasFactory;

    protected $fillable = ['jenis'];

    public function user() {
        return $this->hasMany(User::class);
    }
}
