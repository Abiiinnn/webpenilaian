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


        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->id() ->primary();
            $table->string('nama_mata_pelajaran');
            $table->string('kode_mata_pelajaran');
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
