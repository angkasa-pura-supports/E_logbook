<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateELogPotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('E_log_Pots', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_log');
            $table->text('uraian_lap');
            $table->string('jabatan');
            $table->string('lampiran');
            $table->text('ket');
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
        Schema::dropIfExists('E_log_Pots');
    }
}
