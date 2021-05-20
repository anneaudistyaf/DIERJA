<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id('pelatihan_id');
            $table->text('judul');
            $table->string('author');
            $table->string('thumbnail');
            $table->string('video');
            $table->longText('deskripsi');
            $table->bigInteger('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('kategori_id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pelatihans');
    }
}
