<?php

use Faker\Factory;
use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\Writer;
use Source\Models\User;

require __DIR__."/vendor/autoload.php";

$output = false;
if ($output) {
    $users = (new User())->find()->fetch(true);
    $csv = Writer::createFromString("");
    $csv->insertOne([
        "name",
        "email"
    ]);
    foreach ($users as $user) {
        $csv->insertOne([
            $user->name,
            $user->email
        ]);
    }

    $csv->output("users.csv");
}

$create = false;
if ($create) {
    $users = (new User())->find()->fetch(true);
    $stream = fopen(__DIR__."/csvs/users.csv", "w");

    $csv = Writer::createFromStream($stream);
    $csv->insertOne([
        "name",
        "email"
    ]);
    foreach ($users as $user) {
        $csv->insertOne([
            $user->name,
            $user->email
        ]);
    }

    echo true;
}

$edit = true;
if ($edit) {
    $stream = fopen(__DIR__."/csvs/users.csv", "a+");
    $csv = Writer::createFromStream($stream);
    $faker = Factory::create("pt-br");

    $csv->insertOne([
        $faker->name,
        $faker->email
    ]);
}

$head = true;
if ($head) {
    $stream = fopen(__DIR__."/csvs/users.csv", "r");
    $csv = Reader::createFromStream($stream);

    $csv->setDelimiter(",");
    $csv->setHeaderOffset(0);

    $stmt = (new Statement());
    $users = $stmt->process($csv);

    foreach ($users as $user) {
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
    }
}

