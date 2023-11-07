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
        Schema::create('detail_pengajuan_donasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_donasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jenis_donasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->float('jumlah_kebutuhan');
            $table->string('satuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pengajuan_donasis');
    }
};
