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
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string ('kegiatan', 30);
            $table->string ('detail',150);
            $table->decimal ('harga', 9, 2);
            $table->tinyInteger ('minimal');
            $table->string ('foto')->nullable();
            $table->boolean('status')->default(1);
            $table->tinyInteger ('id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
