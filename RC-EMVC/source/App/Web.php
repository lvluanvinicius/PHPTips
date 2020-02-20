<?php


namespace Source\App;

class Web
{
    public function home($data)
    {
        echo "<h1>Web home</h1>";
        var_dump($data);
    }

    public function blog($data)
    {
        echo "<h1>Web blog</h1>";
        var_dump($data);
    }

    public function post($data)
    {
        echo "<h1>Web artigo</h1>";
        var_dump($data);
    }

    public function category($data)
    {
        echo "<h1>Web categoria</h1>";
        var_dump($data);
    }

    public function contact($data)
    {
        echo "<h1>Web contato</h1>";
        var_dump($data);

        $url = URL_BASE;
        require __DIR__."/../../views/contact.php";
    }

    public function error($data)
    {
        echo "<h1>Web erro: {$data["errcode"]}</h1>";
        var_dump($data);
    }
}