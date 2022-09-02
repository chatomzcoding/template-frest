<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGadget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadget', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar');
            $table->string('kategori');
            $table->string('layar');
            $table->string('chipset');
            $table->string('os');
            $table->text('gpu');
            $table->text('cpu');
            $table->text('ram');
            $table->text('memori_internal');
            $table->text('memori_eksternal');
            $table->text('kamera_belakang');
            $table->text('kamera_depan');
            $table->text('baterai');
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
        Schema::dropIfExists('gadget');
    }
}
