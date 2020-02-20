<?php

require __DIR__.'/vendor/autoload.php';

use Faker\Provider\Lorem;
use Source\Models\Post;

for ($i = 0; $i < 50; $i++) {
    $post = new Post();
    $post->title = Lorem::text(80);
    $post->cover = "./images/gamer.png";
    $post->description = Lorem::paragraphs(2, true);

    if ($post->save()) {
        echo "Dados salvos com sucesso";
    } else {
        echo "{$post->fail()}";
    }
}