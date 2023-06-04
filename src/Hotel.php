<?php
namespace FabiNiko\WebtCoreViewsInMvc;
require 'vendor/autoload.php';

use FabiNiko\WebtCoreViewsInMvc\ViewRenderer;

class Hotel
{
    public string $rating;
    public string $name;
    public string $price;
    public string $imagePath;
    public string $templatePath;

    /**
     * @param string $rating
     * @param string $name
     * @param string $price
     * @param string $imagePath
     */
    public function __construct(string $rating, string $name, string $price, mixed $imagePath, mixed $templatePath)
    {
        $this->rating = $rating;
        $this->name = $name;
        $this->price = $price;
        $this->imagePath = $imagePath;
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
    public function getImagePath(): string
    {
        return $this->imagePath;
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
            "###IMAGEPATH###" => $this->getImagePath(),
        ];

        return ViewRenderer::renderView($this->getTemplatePath(), $data);
    }
}