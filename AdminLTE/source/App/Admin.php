<?php


namespace Source\App;


use League\Plates\Engine;
use Source\Models\User;


class Admin
{
    private $views;

    public function __construct()
    {
        $this->views = Engine::create(__DIR__."/../../views/admin", "php");
    }

    public function validateLogin()
    {
        session_start();
        session_regenerate_id();
        if (!isset($_SESSION["username"]) || $_SESSION["username"] == "") {
            header("location: ".url("admin/login?status=error"));
        }
    }

    public function dashboard(): void
    {
      $this->validateLogin();

        echo $this->views->render("dashboard", [
          "title" => "Administração | ".SITE["namesite"],
        ]);
    }

    public function exit(): void
    {
        $this->validateLogin();

        session_destroy();
        header("location: ".url("admin/login?status=success"));
    }
}
