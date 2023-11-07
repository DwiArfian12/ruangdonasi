<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_pemesanan_donasis', function (Blueprint $table) {
            $table->id();
            $table->float('jumlah_donasi');
            $table->foreignId('pemesanan_donasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jenis_donasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanan_donasis');
    }
};
