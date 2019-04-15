<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_place', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_place')->unsigned();
            $table->integer('id_tour')->unsigned();
            $table->timestamps();
            //$table->foreign('id_place')->references('id')->on('place')->onDelete('cascade');
            //$table->foreign('id_tour')->references('id')->on('tour')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_place');
    }
}
