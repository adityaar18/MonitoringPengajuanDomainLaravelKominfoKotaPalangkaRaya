<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pertanyaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('instansi',100);
            $table->string('nama_penanya',100);
            $table->string('email',100);
            $table->string('pertanyaan',100);
            
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
        Schema::dropIfExists('form_pertanyaans');
    }
}
