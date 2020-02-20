<?php
require __DIR__ . "/../vendor/autoload.php";

$router = new \CoffeeCode\Router\Router(ROOT);

/*
 * APP
 */
$router->namespace("Source\App");

/*
 * WEB:Index
 */
$router->group(null);
$router->get("/", "Web:index");

/*
 * WEB:Contact
 */
$router->get("/contato", "Web:contact");

/*
 * MEMBERS:Members Login
 */
$router->group("members");
$router->get("/login", "Members:login");
$router->get("/register", "Members:register");

/*
 * ADMIN:Dashboard
 */
$router->group("admin");
$router->get("/panel", "Admin:dashboard");
$router->get("/sair", "Admin:exit");

/*
 * LOGIN:login
 */
$router->get("/login", "Login:login");
$router->post("/check", "Login:check");
$router->post("/destroi", "Login:delSction");

/*
 * ERROR:ERROR
 */
$router->group("ops");
$router->get("/{errcode}", "Error:error");

/*
 * PROCESS
 */
$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}
