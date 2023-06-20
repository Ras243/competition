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
        Schema::create('daftar_lomba', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lomba', 50);
            $table->string('sampul_lomba', 50);
            $table->string('deskripsi_lomba', 250);
            $table->integer('biaya_pendaftaran');
            $table->dateTime('batas_pendaftaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daftar_lomba');
    }
};
