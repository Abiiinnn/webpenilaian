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
            $table->id()->primary();
            $table->string('nama');
            $table->string('nip');
            $table->enum('kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->enum('role', ['admin', 'guru'])->default('admin');
            $table->unsignedBigInteger('guru_id')->nullable(); // Foreign key to 'guru' table
            $table->foreign('guru_id')->references('id')->on('guru')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
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
