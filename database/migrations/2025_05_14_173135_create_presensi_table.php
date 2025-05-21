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
    Schema::create('presensi', function (Blueprint $table) {
    $table->id();
    $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade');
    $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
    $table->string('keterangan');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
