<?php


namespace Source\Controllers;


use League\Plates\Engine;
use Source\models\User;

class Form
{
    /** @var Engine **/
    private $view;
    public function __construct($router)
    {
        $this->view = Engine::create(dirname(__DIR__, 2)."/theme", "php");

        $this->view->addData(["router" => $router]);
    }

    public function home(): void
    {
        echo $this->view->render("home", [
            "users" => (new User())->find()->order("name")->fetch(true)
        ]);
    }

    public function create(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function delete(array $data): void
    {
        if (empty($data["id"])) {
            return;
        }

        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $user = (new User())->findById($id);
        if ($user) {
            $user->destroy();
        }

        $callback["remove"] = true;
        echo json_encode($callback);
    }
}