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
        Schema::create('pesanan', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('nama', 80);
            $table->date('tgl_kunjung');
            $table->smallInteger('jumlah_pengunjung');
            $table->string('email', 100);
            $table->string('tlp', 17);
            $table->string('bukti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
