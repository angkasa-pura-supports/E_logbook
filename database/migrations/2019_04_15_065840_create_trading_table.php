<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_project');
            $table->string('no_kontrak');
            $table->date('tgl_kontrak');
            $table->string('jangka_waktu');
            $table->string('nilai_total');
            $table->string('ket');
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
        Schema::dropIfExists('trading');
    }
}
