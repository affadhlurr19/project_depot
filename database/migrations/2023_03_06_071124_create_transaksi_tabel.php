<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_galon');
            $table->foreign('id_galon')->references('id_galon')->on('tabel_galon')->onDelete('cascade');
            $table->unsignedBigInteger('id_depot');
            $table->foreign('id_depot')->references('id_depot')->on('tabel_depot')->onDelete('cascade');
            $table->dateTime('tgl_pesanan');
            $table->string('status');
            $table->integer('kuantitas');
            $table->bigInteger('total_biaya');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_transaksi');
    }
};
