<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_sidhi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jns_klmn');
            $table->string('tmp_lhr');
            $table->date('tgl_lhr');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('wil');
            $table->string('almt');
            $table->string('file_ktksi');
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
        Schema::dropIfExists('pengajuan_sidhi');
    }
};
