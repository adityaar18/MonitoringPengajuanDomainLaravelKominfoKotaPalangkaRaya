<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSubdomainWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__subdomain_webs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_PerangkatDaerah',100);
            $table->string('kategori',100);
            $table->string('nama_subdomain',100);
            $table->string('keterangan',100);
            $table->date('update_terakhir');
            $table->string('identitas',100);
            $table->string('profil',100);
            $table->string('kebijakan',100);
            $table->string('l_publik',100);
            $table->string('kb_produkhukum',100);
            $table->string('pp_kegiatan',100);
            $table->string('l_aspirasi',100);
            $table->string('kontak',100);
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
        Schema::dropIfExists('data__subdomain_webs');
    }
}
