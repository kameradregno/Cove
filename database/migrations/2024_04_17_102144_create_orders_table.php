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
        Schema::create('orders', function (Blueprint $table) {

            $table->UnsignedBigInteger('customers_id');
            $table->string('nama_pembeli', 255);
            $table->string('nama_pesanan', 255);
            $table->enum('metode_pembayaran', ['TRANSFER','COD']);
            $table->integer('ongkir');            
            $table->enum('jenis_pengiriman', ['JNE','SICEPAT','JNT']);
            $table->timestamps();

            $table->foreign('customers_id')->references('id')->on('customers');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
