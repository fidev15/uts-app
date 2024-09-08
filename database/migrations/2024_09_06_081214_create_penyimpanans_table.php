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
        Schema::create('penyimpanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->text('deskripsi');
            $table->integer('stok_tersedia');
            $table->decimal('harga_satuan', 10, 2);
            $table->string('kategori');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyimpanans');
    }
};
