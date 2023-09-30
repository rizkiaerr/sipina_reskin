<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wbp_id');
            $table->string('id_registrasi');
            $table->text('keluhan_kesehatan');
            $table->text('diagnosa');
            $table->text('penanganan');
            $table->date('tanggal_kesehatan');
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
        Schema::dropIfExists('kesehatans');
    }
}
