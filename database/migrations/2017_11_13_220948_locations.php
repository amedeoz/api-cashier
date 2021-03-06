<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('players');
            $table->string('hour_end');
            $table->string('hour_start');
            $table->date('day');
            $table->integer('type_id')->unsigned();
            $table->integer('terrain_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('terrain_id')->references('id')->on('terrain');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
