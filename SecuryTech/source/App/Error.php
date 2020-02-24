<?php


namespace Source\App;


use League\Plates\Engine;

class Error
{
    private $views;
    public function __construct()
    {
        $this->views = Engine::create(__DIR__."/../../views", "php");
    }

    public function error(array $data): void
    {
        echo $this->views->render("error", [
            "title" => "Erro {$data['errcode']} | ".SITE["namesite"],
            "error" => $data['errcode']
        ]);
    }
}
