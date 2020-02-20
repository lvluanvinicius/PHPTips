<?php


namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $views;

    public function __construct()
    {
        $this->views = Engine::create(__DIR__."/../../views", "php");
    }

    public function index(): void
    {
        echo $this->views->render("index", [
            "title" => "Home | ".SITE["namesite"]
        ]);
    }

    public function contact(): void
    {
        echo $this->views->render("contact", [
           "title" => "Contato | ".SITE["namesite"]
        ]);
    }

}
