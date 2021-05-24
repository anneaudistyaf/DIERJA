<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_lowongans', function (Blueprint $table) {
            $table->id('lowongan_id');
            $table->string('nama');
            $table->string('posisi');
            $table->tinyInteger('status');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('jobs_id')->unsigned();
            $table->foreign('jobs_id')->references('jobs_id')->on('jobs')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('company_id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('apply_lowongans');
    }
}
