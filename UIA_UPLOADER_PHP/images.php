<?php

require __DIR__."/vendor/autoload.php";

$upload = new \CoffeeCode\Uploader\Image("storage", "images");

$files = $_FILES;

if (!empty($files["image"])) {
    $file = $files["image"];

    if (empty($file["type"]) || !in_array($file["type"], $upload::isAllowed())) {
        echo "<p class='color; red'>Selecione uma imagem válida!</p>";
    } else {
        $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
        echo "<img src='{$uploaded}'>";
    }
}
?>

<?php
if (!empty($files["images"])) {
    $images = $files["images"];

    for ($i = 0; $i < count($images["type"]); $i++) {
        foreach (array_keys($images) as $keys) {
            $imagesFiles[$i][$keys] = $images[$keys][$i];
        }
    }

    foreach ($imagesFiles as $file) {
        if (empty($file["type"])) {
            echo "<p class='color; red'>Selecione uma imagem válida!</p>";
        }elseif (!in_array($file["type"], $upload::isAllowed())) {
            echo "<p class='color; red'>O arquivo {$file["name"]} não é válido!</p>";
        } else {
            $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
            echo "<img src='{$uploaded}'>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Single Image: </h1>
        <input type="file" name="image">
        <button>Send --></button>
    </form>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>More Images: </h1>
        <input type="file" name="images[]" multiple accept="image/jpeg, image/jpg, image/png">
        <button>Send --></button>
    </form>
</body>
</html>
