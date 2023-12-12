<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin',100);
            $table->string('judul',100);
            $table->string('deskripsi',100);
            $table->string('prosedur',100);
            $table->string('syarat',100);

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
        Schema::dropIfExists('syarats');
    }
}
