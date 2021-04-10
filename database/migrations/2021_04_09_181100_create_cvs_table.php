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
            $table->string('keahlian');
            $table->string('disabilitas');
            $table->string('pengalaman_kerja');
            $table->string('deskripsi_kerja');
            $table->string('edukasi');
            $table->date('tahun_kerja');
            $table->string('skill');
            $table->string('sosial_media');
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
