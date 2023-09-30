<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tracks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tracks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('book_id');
            $table->foreignId('kode_resi');
            $table->string('titipan_barang')->nullable();
            $table->string('posisi_titipan')->nullable();
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
        Schema::dropIfExists('Tracks');
    }
}
