<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsToCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        if (!Schema::hasTable('news')) {

            Schema::create('news',function(Blueprint $table){
                $table->increments('id');
                $table->string('caption');
                $table->string('content');
                $table->timestamps();

            });

        }
        
        if(!Schema::hasColumn('center','mobile')){

            Schema::table('center', function (Blueprint $table) {  
                //
                $table->string('mobile');

            });
        }

        Schema::table('center_news', function(Blueprint $table){

            $table->foreign('center_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('news_id')->references('id')->on('center')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {   
        Schema::drop('news');
        Schema::drop('center_news');
    }
}
 