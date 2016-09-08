<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activeCenter', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('centername');
            $table->integer('activity_id');
            
            

                              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activeCenter');
    }
}
