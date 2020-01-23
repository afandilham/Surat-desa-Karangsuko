<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik');
            $table->string('nama', 32);
            $table->string('kelamin', 32);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('golongan_darah', 10);
            $table->string('agama');
            $table->string('status');
            $table->string('SHDRT');
            $table->integer('id_pendidikan', 11);
            $table->string('pekerjaan');
            $table->string('ibu', 32);
            $table->stirng('ayah', 32);
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
        Schema::dropIfExists('penduduk');
    }
}
