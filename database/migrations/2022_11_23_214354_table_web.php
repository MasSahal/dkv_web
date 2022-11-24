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
        Schema::create('web', function (Blueprint $table) {
            $table->integer('id_web', true, true);
            $table->string('title_web', 150);
            $table->string('sambutan', 200);
            $table->string('email', 100);
            $table->string('telepon', 100);
            $table->string('fax', 100);
            $table->text('lokasi');
            $table->text('gmap');
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
        Schema::dropIfExists('web');
    }
};
