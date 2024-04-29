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
        Schema::create('items', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('order_id');
            
            $table->string('nama_sprei');
            $table->string('harga_sprei');
            $table->longText('catatan');
            $table->string('bahan_sprei');
            $table->string('ukuran_sprei');
            // $table->string('bahan_bantal')->enum(['Katun','Wol'])->nullable();
            // $table->string('jenis_bantal')->nullable();
            // $table->string('jumlah_bantal')->nullable();
            // $table->string('bahan_bedcover')->enum(['Katun','Wol'])->nullable();
            // $table->string('jenis_bedcover')->nullable();
            // $table->string('jumlah_bedcover')->nullable();
            // $table->string('bahan_inner')->enum(['Katun','Wol'])->nullable();
            // $table->string('jenis_inner')->nullable();
            // $table->string('jumlah_inner')->nullable();
            // $table->string('bahan_quilt')->enum(['Katun','Wol'])->nullable();
            // $table->string('jenis_quilt')->nullable();
            // $table->string('jumlah_quilt')->nullable();
            // $table->string('jumlah_box')->nullable();
            // $table->string('jenis_karet')->enum(['Keliling','Anti Geser'])->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
