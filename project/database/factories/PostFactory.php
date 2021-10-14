<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {

    $title = $faker->paragraph(1);
    return [
        'uri' => str_slug($title),
        'title' => $title,
        'subtitle' => $faker->paragraph(1),
        'content' => $faker->paragraph(10),
        'cover' => 'posts/'.$faker->numberBetween(1, 12).'.jpg', //essa parte aqui é uma gambiarra pra colocar imagens no banco de dados, já que as imagens na pasta são listadas de 1 à 12
        'author' =>  1
    ];
});
