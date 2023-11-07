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
        Schema::create('pemesanan_donasis', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pengajuan_donasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal');
            $table->enum('status', ['Tertunda', 'Proses', 'Selesai', 'Batal']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_donasis');
    }
};
