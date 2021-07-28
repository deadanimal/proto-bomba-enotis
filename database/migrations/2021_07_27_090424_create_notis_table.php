<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->String('nama',50);
            $table->String('alamat', 250);
            // $table->String('jenis_kesalahan', 250);
            // $table->String('lokasi_kesalahan',250);
            $table->Integer('tempoh_notis');
            // $table->String('gambar', 250);
            // $table->String('status',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notis');
    }
}
