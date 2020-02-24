<?php


namespace Source\App;


use League\Plates\Engine;
use Source\Models\User;

class Login
{
  private $views;
  private $user;
  private $usertest;
  private $passwd;
  private $name;
  private $email;
  private $id;

  public function __construct()
  {
    $this->views = Engine::create(__DIR__ . "/../../views/admin", "php");
  }

  public function login(): void
  {
    echo $this->views->render("login", [
      "title" => "Area restrita | " . SITE["namesite"]
    ]);
  }

  public function check()
  {
    $user = new User();
    $this->usertest = $_POST["username"];

    $datas = $user->find(
      "username = :user",
      "user={$this->usertest}"
    )->fetch(true);

    foreach ($datas as $d) {
      $this->id = $d->id;
      $this->name = $d->name;
      $this->user = $d->username;
      $this->email = $d->email;
      $this->passwd = $d->password;
    }
    echo $this->user;


    if ($this->user == $this->usertest and $this->passwd == $_POST["passwd"]) {
      session_start();
      session_regenerate_id();

      $_SESSION["username"] = $this->user;
      $_SESSION["name"] = $this->name;
      $_SESSION["email"] = $this->email;
      header("location: " . url("admin/panel"));

    } else {
      header("location: " . url("admin/login?status=error"));
    }
  }

    public function destroi()
    {
      session_start();
      session_destroy();
      header("location: ".url("admin/login?status=time"));
    }
}
