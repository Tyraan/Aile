<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCourseAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('babyname',50);
            $table->string('babymonth',50);
            $table->string('babysex',50);
            $table->string('mobile',50);
            $table->string('city',50);
            $table->string('adress',80);
            $table->integer('pubdate');
            $table->string('rq',11);
            $table->string('sno',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_appointment');
    }
}
