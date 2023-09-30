<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_resi');
            $table->string('nama_pengunjung');
            $table->string('nik_pengunjung');
            $table->integer('jumlah_pengunjung');
            $table->date('tanggal_kunjungan');
            $table->string('status_wbp');
            $table->string('nama_wbp');
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
        Schema::dropIfExists('books');
    }
}
