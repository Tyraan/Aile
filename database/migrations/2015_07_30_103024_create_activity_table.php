<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function(Blueprint $table)
        {
            $table->increments('id');
            // 指定文章所属用户ID
            $table->integer('center_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');
 
            // 生成外键，并且指定在删除用户时同时删除该用户的所有文章
            $table->foreign('center_id')
                ->reference('id')
                ->on('activeCenter')
                ->onDelete('cascade');
        });
    }
        //
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('activity');
    }
}
