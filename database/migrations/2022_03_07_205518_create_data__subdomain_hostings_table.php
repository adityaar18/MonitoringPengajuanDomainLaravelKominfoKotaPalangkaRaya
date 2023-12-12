<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSubdomainHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__subdomain_hostings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_PerangkatDaerah',100);
            $table->string('kategori',100);
            $table->string('nama_subdomain',100);
            $table->string('nama_WebAplikasi',100);
            $table->string('deskripsi',100);
            $table->string('spek_hosting',100);
            $table->string('keterangan',100);
            $table->date('update_web',100);
            $table->string('versi_mobile',100);
            $table->string('catatan',100);
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
        Schema::dropIfExists('data__subdomain_hostings');
    }
}
