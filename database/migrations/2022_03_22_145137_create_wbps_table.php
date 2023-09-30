<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('id_registrasi')->unique();
            $table->foreignId('user_id');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin',6);
            $table->string('agama');
            $table->date('sepertiga_masa_pidana')->nullable();
            $table->date('setengah_masa_pidana')->nullable();
            $table->date('duapertiga_masa_pidana')->nullable();
            $table->date('ekspirasi_awal')->nullable();
            $table->date('ekspirasi_akhir')->nullable();
            $table->string('nama_ibu')->default('Tidak Diketahui');
            $table->string('remisi')->nullable();
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
        Schema::dropIfExists('wbps');
    }
}
