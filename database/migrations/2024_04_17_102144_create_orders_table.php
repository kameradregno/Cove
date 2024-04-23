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

            $table->id();
            $table->unsignedBigInteger('customer_id');

            $table->string('nama_pembeli', 255);
            $table->string('nama_pesanan', 255);
            $table->string('metode_pembayaran')->enum(['TRANSFER','COD']);          
            $table->string('alamat', 1000);
            $table->string('jenis_pengiriman')->enum(['JNE','POS','TIKI']);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');

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
