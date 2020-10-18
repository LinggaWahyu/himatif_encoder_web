<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penguruses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->integer('jabatan_id')->unsigned();
            $table->string('photo', 100);
            $table->integer('divisi_id')->unsigned();
            $table->timestamps();
            $table->foreign('jabatan_id')->references('id')->on('jabatan_penguruses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('divisi_id')->references('id')->on('divisis')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penguruses');
    }
}
