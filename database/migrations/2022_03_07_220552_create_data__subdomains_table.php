<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSubdomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__subdomains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_PerangkatDaerah',100);
            $table->string('kategori',100);
            $table->string('nama_subdomain',100);
            $table->string('nama_WebAplikasi',100);
            $table->string('deskripsi',100);
            $table->string('hosting',100);
            $table->string('domain',100);
            $table->string('ip_address',100);
            $table->string('metode',100);
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
        Schema::dropIfExists('data__subdomains');
    }
}
