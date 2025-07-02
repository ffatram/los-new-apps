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
        Schema::create('tblanalisaagunan', function (Blueprint $table) {
            $table->id();
            $table->string('no_permohonan', 15);
            $table->string('jenis_agunan', 100)->nullable();
            $table->string('pengikatan', 100)->nullable();
            $table->string('status_kepemilikan', 50)->nullable();
            $table->string('nama_pemilik', 255)->nullable();
            $table->text('lokasi_agunan')->nullable();
            $table->decimal('taksasi_agunan', 15, 2)->nullable();
            $table->decimal('luas_tanah', 15, 2)->nullable();
            $table->decimal('luas_bangunan', 15, 2)->nullable();
            $table->string('merk_kendaraan', 100)->nullable();
            $table->year('tahun_kendaraan')->nullable();
            $table->string('no_rekening', 50)->nullable();
            $table->decimal('nilai_agunan', 15, 2)->nullable();
            $table->decimal('nilai_market', 15, 2)->nullable();
            $table->decimal('nilai_taksasi', 15, 2)->nullable();
            $table->string('dibuat_oleh', 30)->nullable();
            $table->string('diubah_oleh', 30)->nullable();

            $table->timestamps();

            $table->foreign('no_permohonan')->references('no_permohonan')->on('permohonans')->onDelete('restrict');
            $table->foreign('no_permohonan')->references('no_permohonan')->on('permohonans')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblanalisaagunan');
    }
};
