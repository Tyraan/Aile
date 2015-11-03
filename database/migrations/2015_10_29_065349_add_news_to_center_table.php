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
        if (Schema::hasTable('center_news')){
            Schema::drop('center_news');
        }
        Schema::create('center_news',function(Blueprint $table){
             $table->integer('center_id')->unsigned()->index();            
             $table->integer('news_id')->unsigned()->index();                          
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
        Schema::drop('news');
        Schema::drop('center_news');
    }
}
 