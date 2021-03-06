<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;



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
            $table->char('no_ktp',16);
            $table->string('instansi');
            $table->integer('no_rack');
            $table->string('no_slot');
            $table->string('pekerjaan');
            // $table->string('foto')->nullable();
            $table->string('kamera')->nullable();
            $table->enum('status',['checkin','checkout']);
            //$table->timestamps();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('updated')->nullable();
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
