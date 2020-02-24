<?php


namespace Source\App;

use League\Plates\Engine;

class Members
{
  private $views;
  public function __construct()
  {
    $this->views = Engine::create(__DIR__."/../../views/members", "php");
  }

  public function login() {
    echo $this->views->render("login", [
      "title" => "Members Login | ".SITE["namesite"]
    ]);
  }

  public function register() {
    echo $this->views->render("register", [
      "title" => "Register | ".SITE["namesite"]
    ]);
  }
}
