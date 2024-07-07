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
        

        Schema::create('murid', function (Blueprint $table) {
            $table->id() -> primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nama_orang_tua');
            $table->string('kota_lahir'); 
            $table->string('tanggal_lahir');
            $table->unsignedBigInteger('kelas_id'); 
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
