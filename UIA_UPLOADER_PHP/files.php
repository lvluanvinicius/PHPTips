<?php

require __DIR__."/vendor/autoload.php";

$upload = new \CoffeeCode\Uploader\File("storage", "files");

$files = $_FILES;

if (!empty($files["file"])) {
    $file = $files["file"];

    if (empty($file["type"]) || !in_array($file["type"], $upload::isAllowed())) {
        echo "<p class='color; red'>Selecione um arquivo válido!</p>";
    } else {
        $uploaded = $upload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME), 350);
        echo "<a href='{$uploaded}'>Acessar o arquivo</a>";
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
        <h1>Send file: </h1>
        <input type="file" name="file">
        <button>Send --></button>
    </form>
</body>
</html>
