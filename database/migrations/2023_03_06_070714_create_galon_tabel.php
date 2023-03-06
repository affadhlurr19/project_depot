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
        Schema::create('tabel_galon', function (Blueprint $table) {
            $table->id('id_galon');
            $table->unsignedBigInteger('id_depot');
            $table->foreign('id_depot')->references('id_depot')->on('tabel_depot')->onDelete('cascade');
            $table->string('jenis', 50);
            $table->string('merk', 50);
            $table->integer('stok');
            $table->bigInteger('tarif_galon');
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
        Schema::dropIfExists('tabel_galon');
    }
};
