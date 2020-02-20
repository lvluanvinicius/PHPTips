<?php

use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SendGridHandler;
use Monolog\Handler\TelegramBotHandler;
use Monolog\Formatter\LineFormatter;

require __DIR__."/vendor/autoload.php";

$logger = new Logger("web");
$logger->pushHandler(
    new BrowserConsoleHandler(Logger::DEBUG)
);
$logger->pushHandler(new StreamHandler(__DIR__."/app.log", Logger::WARNING));

// Debug
$logger->debug("Holla!", ["logger" => true]);
$logger->info("Holla!", ["logger" => true]);
$logger->notice("Holla!", ["logger" => true]);
$logger->pushHandler(new SendGridHandler(
    SENDGRID['user'],
    SENDGRID['passwd'],
    "zabbixnotfy@gmail.com",
    "luanpsantos@outlook.com.br",
    "Error em app.com: ".date('d/m/Y H:i:s'),
    Logger::CRITICAL
));

$logger->pushProcessor(function ($record) {
    $record['extra']['HTTP_HOST'] = $_SERVER['HTTP_HOST'];
    $record['extra']['REQUEST_URI'] = $_SERVER["REQUEST_URI"];
    $record['extra']['REQUEST_METHOD'] = $_SERVER["REQUEST_METHOD"];
    $record['extra']['HTTP_USER_AGENT'] = $_SERVER["HTTP_USER_AGENT"];
    return $record;
});

$tele_handler = new TelegramBotHandler(SENDGRID['tele_key'], SENDGRID['tele_channel'], Logger::EMERGENCY);
$tele_handler->setFormatter(new LineFormatter(
    "%level_name%: %message%"
));
$logger->pushHandler($tele_handler);

// File
$logger->warning("Holla!", ["logger" => true]);
$logger->error("Holla!", ["logger" => true]);

// E-mail
// $logger->critical("Holla!", ["logger" => true]);
// $logger->alert("Holla!", ["logger" => true]);

$logger->emergency('Essa mensagem foi enviada pelo Monolog');