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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_sekolah_id')->constrained('profil_sekolah')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('S1');
            $table->integer('S2');
            $table->integer('non_gelar');
            $table->integer('PNS');
            $table->integer('bantu');
            $table->integer('yayasan');
            $table->integer('honorer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
