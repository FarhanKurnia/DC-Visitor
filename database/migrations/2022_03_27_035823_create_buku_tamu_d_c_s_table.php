<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTamuDCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tamu_d_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('no_ktp');
            $table->string('instansi');
            $table->integer('no_rack');
            $table->integer('no_slot');
            $table->string('pekerjaan');
            $table->string('foto')->nullable();
            $table->enum('status',['checkin','checkout']);
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
        Schema::dropIfExists('buku_tamu_d_c_s');
    }
}
