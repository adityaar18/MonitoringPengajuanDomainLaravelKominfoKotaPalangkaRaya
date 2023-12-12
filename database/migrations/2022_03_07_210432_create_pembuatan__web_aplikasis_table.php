<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembuatanWebAplikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuatan__web_aplikasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_PerangkatDaerah',100);
            $table->string('kategori',100);
            $table->string('nama_subdomain',100);
            $table->string('nama_WebAplikasi',100);
            $table->string('deskripsi',100);
            $table->string('spek_web',100);
            $table->string('status',100);
            $table->string('catatan',100);
            $table->string('data_dukung',100);

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
        Schema::dropIfExists('pembuatan__web_aplikasis');
    }
}
