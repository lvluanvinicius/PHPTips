<?php
    define("DATA_LAYER_CONFIG", [
        "driver" => "mysql",
        "host" => "localhost",
        "port" => "3306",
        "dbname" => "datalayer",
        "username" => "root",
        "passwd" => "",
        "options" => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
    ]);

    define("MAIL", [
        "host" => "smtp.google.com",
        "port" => "587",
        "user" => "lvluanvinicius45@gmail.com",
        "passwd" => "Paiva_965700",
        "from_name" => "Luan Santos",
        "from_email" => "luan.paiva750@gmail.com"
    ]);