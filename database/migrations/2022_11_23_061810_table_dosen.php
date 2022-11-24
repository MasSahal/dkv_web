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
        Schema::create('dosen', function (Blueprint $table) {
            $table->integer('id_dosen', true, true);
            $table->string('nidn', 50);
            $table->string('nama_dosen', 200);
            $table->text('alamat');
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('gender', 100);
            $table->string('agama', 100);
            $table->string('telepon', 20);
            $table->string('pendidikan', 150);
            $table->string('status', 20);
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
        Schema::dropIfExists('dosen');
    }
};
