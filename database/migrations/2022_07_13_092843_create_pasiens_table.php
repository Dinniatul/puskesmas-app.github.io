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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->char('nik',16)->unique();
            $table->string('nama');
            $table->string('umur');
            $table->date('tgl_lahir');
            $table->string('pekerjaan');
            $table->char('jenis_kelamin',1);
            $table->string('no_hp');
            $table->foreignId('kategori_id');
            $table->text('alamat');
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
        Schema::dropIfExists('pasiens');
    }
};
