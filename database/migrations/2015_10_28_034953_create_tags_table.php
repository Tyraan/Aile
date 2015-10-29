<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if (Schema::hasTable('center')){
            Schema::drop('center');

        }
        if (Schema::hasTable('tags')){
            Schema::drop('tags');
        }

        if (Schema::hasTable('center_news')){
            Schema::drop('center_news');
        }
        
               
        Schema::create('center', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('supervisor');
            $table->string('intro');
            $table->timestamps();
        });
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
        Schema::drop('center');
        Schema::drop('center_news');

    }
}
