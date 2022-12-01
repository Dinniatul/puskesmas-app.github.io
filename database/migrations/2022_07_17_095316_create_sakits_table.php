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
        Schema::create('sakits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->date('tgl_mulai');
            $table->date('tgl_berakhir');
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
        Schema::dropIfExists('sakits');
    }
};
