<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('instansi',100);
            $table->string('kategori',100);
            $table->string('jenis_pemohon',100);
            $table->string('no_surat',100);
            $table->date('tgl_surat');
            $table->string('upload_surat',100);
            $table->string('nama_domain',100);
            $table->string('nama_webapk',100);
            $table->string('dsk_webapk',100);
            $table->string('spk_hosting',100);
            $table->string('hosting',100);
            $table->string('domain',100);
            $table->string('ip_address',100);
            $table->string('metode',100);
            $table->string('spek_webapp',100);  
            $table->string('nama_pengaju',100);
            $table->string('kontak',100);
            $table->string('email',100);
            $table->string('keterangan',100);

          
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
        Schema::dropIfExists('pengajuans');
    }
}
