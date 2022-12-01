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
        Schema::create('sehats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('golongan_darah');
            $table->string('riwayat_penyakit');
            $table->date('tgl_periksa');
            $table->string('keperluan');
            $table->foreignId('dokter_id');

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
        Schema::dropIfExists('sehats');
    }
};
