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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('jenjang_id')->constrained('jenjang')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_berdiri');
            $table->string('NSS');
            $table->string('NPSN');
            $table->string('telepon');
            $table->text('alamat');
            $table->string('nama_yayasan');
            $table->boolean('sertifikat_BPHNU');
            $table->string('file_BPHNU')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
