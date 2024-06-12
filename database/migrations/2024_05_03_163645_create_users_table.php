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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->nullable()->length(20);
            $table->string('no_admin')->unique()->nullable()->length(20);
            $table->string('name')->length(50);
            $table->string('credential', 60)->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->default(bcrypt('password'));
            $table->enum('role', ['admin', 'ustaz', 'murid'])->default('murid');
            $table->enum('kategori', ['Ilmu Fikih', 'Ilmu Tasawuf', 'Ilmu Siroh'])->nullable();
            $table->string('telp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
