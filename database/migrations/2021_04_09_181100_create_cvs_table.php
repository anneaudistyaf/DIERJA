<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id('cv_id');
            $table->string('keahlian')->nullable();
            $table->string('pengalamanKerja')->nullable();
            $table->string('tahunAwalKerja')->nullable();
            $table->string('tahunAkhirKerja')->nullable();
            $table->text('deskripsiKerja')->nullable();
            $table->string('edukasi')->nullable();
            $table->string('edukasiTahunAwal')->nullable();
            $table->string('edukasiTahunAkhir')->nullable();
            $table->string('skill')->nullable();
            $table->string('sosialMedia')->nullable();
            $table->string('optionSosialMedia')->nullable();
            $table->bigInteger('id')->unsigned()->nullable();
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cvs');
    }
}
