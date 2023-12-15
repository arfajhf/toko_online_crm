<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->longText('gambar');
            $table->string('harga');
            $table->enum('kategori', ['cctv','pc','hardware','ups', 'notebook', 'cable']);
            $table->enum('kondisi', ['baru', 'bekas']);
            $table->string('berat');
            $table->integer('rating')->nullable();
            $table->longText('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barangs');
    }
}
