<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameSingle');
            $table->string('Lyric');
            $table->string('urlMp3');
            $table->string('urlImages');
            $table->string('trangThai');
            $table->string('View');
            $table->string('Slur');
            $table->string('Tags');
            $table->string('postDate');
            $table->string('updateDate');
            $table->string('thuTu');
            $table->integer('anHien')->default(0);
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
        Schema::dropIfExists('singers');
    }
}
