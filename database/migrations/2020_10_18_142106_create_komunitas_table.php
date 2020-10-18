<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->enum('type', ['partner','komunitas','kegiatan']);
            $table->text('description');
            $table->string('image')->nullable(100);
            $table->string('instagram_link')->nullable(100);
            $table->string('facebook_link')->nullable(100);
            $table->string('youtube_link')->nullable(100);
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
        Schema::drop('komunitas');
    }
}
