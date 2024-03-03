<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ustaz', function (Blueprint $table) {
            $table->bigIncrements('id_ustaz'); // Primary key dengan tipe data int(10)
            $table->unsignedBigInteger('id_kategori'); // Foreign key dengan tipe data int(10)
            $table->string('nama_ustaz', 255);
            $table->string('alamat_ustaz', 255);
            $table->string('email_ustaz', 255);
            $table->string('tlp_ustaz', 20);
            $table->string('username', 255);
            $table->string('password', 255);
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            // Gantilah 'nama_tabel_kategori' dengan nama tabel kategori yang sesuai dalam basis data Anda
        });
    }
};
