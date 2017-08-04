<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\News::class, function ($faker){
    $content1= <<<CONTENT
<p><img alt="TIM截图20170721141710.png" src="/image/news/wVpLu20170804.png" width="1354" height="643"></p>
CONTENT;
    $content = $content1.$faker->text;
    return [
        'caption' =>$faker->name,
        'content' =>$content
    ];
});

$factory->define(App\Picture::class, function (Faker\Generator $faker){
    return [
        'location'=>"VpLu20170804.png",
        'link'=>'None'
    ];
});