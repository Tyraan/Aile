<?php

use Illuminate\Database\Seeder;
use App\Center;
use App\News;


class CenterPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('center')->delete();
        $EveryNews = News::create(
        	[
        	'caption' =>'长者的一点人生经验',
        	'content' => '不要总想搞个大新闻'
        	]);
        $EveryNews->save();

        for ($i=0;$i<3;$i++){
        	$ACenter = Center::create(
        		[
        		'name'       => "北京".$i,
        		'supervisor' => 'tyraan'.$i,
        		'intro'      => 'this is a test center num'.$i,
        		]   		

        	);
        	$ANews = News::create(
        		[
        		'caption' =>'测试'.$i,
        		'content' =>'内容为测试专用'.$i,
        		]);
        	$ANews->save();
        	$ACenter->news()->attach($EveryNews);
        	$ACenter->news()->attach($ANews);
        	$ACenter->save();

        }

    }
}
