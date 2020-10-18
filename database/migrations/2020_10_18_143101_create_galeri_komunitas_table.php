<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriKomunitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri_komunitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo', 100);
            $table->integer('komunitas_id')->unsigned();
            $table->timestamps();
            $table->foreign('komunitas_id')->references('id')->on('komunitas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('galeri_komunitas');
    }
}
