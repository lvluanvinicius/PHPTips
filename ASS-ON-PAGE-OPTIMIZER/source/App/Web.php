<?php


namespace Source\App;


use League\Plates\Engine;
use Source\Models\User;
use Source\Support\Seo;

class Web
{
    /** @var Engine **/
    private $view;

    /** @var $seo Seo **/
    private $seo;

    /** Web construct **/
    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
        $this->seo = new Seo();
    }

    public function home(): void
    {
        $users = (new User())->find()->fetch(true);
        $head = $this->seo->render(
            "Home | ".SITE,
            "Lorem ipsum dolor sit amet, consectur.",
            url(),
            "https://via.placeholder.com/1200x628.png?text=Home+Cover"
        );

        echo $this->view->render("home", [
            "head" => $head,
            "users" => $users
        ]);
    }

    public function contact(): void
    {
        $head = $this->seo->render(
            "Contato |".SITE,
            "Lorem ipsum dolor sit amet, consectur.",
            url("contato"),
            "https://via.placeholder.com/1200x628.png?text=Contato+Cover"
        );

        echo $this->view->render("contact", [
            "head" => $head
        ]);
    }

    public function error(array $data): void
    {
        $head = $this->seo->render(
            "Erro {$data['errcode']} |".SITE,
            "Lorem ipsum dolor sit amet, consectur.",
            url("ops/{$data['errcode']}"),
            "https://via.placeholder.com/1200x628.png?text=Error+{$data['errcode']}"
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $data['errcode']
        ]);
    }
}