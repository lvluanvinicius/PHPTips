<?php


namespace Source\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optmizer;

    public function __construct(string $schema = "article")
    {
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(
            ROOT,
            "pt-br",
            $schema
        )->publisher(
            "",
            ""
        )->twitterCard(
            "",
            "",
            "localhost"
        )->facebook(
            ""
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optmizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}