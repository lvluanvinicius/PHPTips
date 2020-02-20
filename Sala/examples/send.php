<?php

require __DIR__."/../vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Ola mundo!",
    "<h1>Um teste de email foi iniciado e enviado para você!</h1>",
    "Luan Santos",
    "luan.paiva750@gmail.com"
)->send();

if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}