<?php
namespace Tobi\Mvc;
require 'vendor/autoload.php';

use Tobi\Mvc\ViewRenderer;

class Hotel
{
    public string $rating;
    public string $name;
    public string $price;
    public string $templatePath;

    /**
     * @param string $rating
     * @param string $name
     * @param string $price
     */
    public function __construct(string $rating, string $name, string $price, mixed $templatePath)
    {
        $this->rating = $rating;
        $this->name = $name;
        $this->price = $price;
        $this->templatePath = $templatePath;
    }

    /**
     * @return string
     */
    public function getRating(): string
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getTemplatePath(): string
    {
        return $this->templatePath;
    }

    public function render(): string   {
        $data = [
            "###RATING###" => $this->getRating(),
            "###NAME###" => $this->getName(),
            "###PRICE###" => $this->getPrice(),
        ];

        return ViewRenderer::renderView($this->getTemplatePath(), $data); // Bekommt hotl.html pfad
    }
}