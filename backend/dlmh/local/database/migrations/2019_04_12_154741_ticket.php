<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cus_name');
            $table->string('cus_phone');
            $table->string('cus_email');
            $table->integer('number_of_adults');
            $table->integer('number of children');
            $table->integer('status');
            $table->integer('id_tour')->unsigned();
            $table->timestamps();
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
        Schema::dropIfExists('ticket');
    }
}
