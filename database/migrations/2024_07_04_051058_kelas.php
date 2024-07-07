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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nama_kelas');
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->integer('jumlah_siswa')->default(0);
            $table->string('tingkat_kelas');
            $table->timestamps();
        
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
