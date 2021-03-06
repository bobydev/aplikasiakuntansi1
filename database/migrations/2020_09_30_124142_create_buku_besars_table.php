<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuBesarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_besars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_trans');
            $table->string('no_trans', 10);
            $table->string('catatan', 255);
            $table->double('jml_db')->nullable();
            $table->double('jml_cr')->nullable();
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
        Schema::dropIfExists('buku_besars');
    }
}
