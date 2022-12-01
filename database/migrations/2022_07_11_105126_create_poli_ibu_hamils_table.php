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
        Schema::create('poli_ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->string('usia_kandungan');
            $table->string('keluhan');
            $table->date('tgl_periksa');
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
        Schema::dropIfExists('poli_ibu_hamils');
    }
};
