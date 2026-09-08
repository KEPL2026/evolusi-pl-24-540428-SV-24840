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
    Schema::create('services', function (Blueprint $table) {
        $table->id('id_layanan');
        $table->string('nama_layanan');
        $table->text('deskripsi_layanan')->nullable();
        $table->decimal('harga_layanan', 10, 2);
        $table->integer('durasi_menit');
        $table->string('url_gambar_layanan')->nullable();
        $table->boolean('is_unggulan')->default(false);
        $table->timestamps();  
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
