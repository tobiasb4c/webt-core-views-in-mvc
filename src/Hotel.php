<?php
namespace Tobi\Mvc;
require 'vendor/autoload.php';

use Tobi\Mvc\ViewRenderer;

class Hotel
{
    public string $rating;
    public string $name;
    public string $price;

    /**
     * @param string $rating
     * @param string $name
     * @param string $price
     */
    public function __construct(string $rating, string $name, string $price)
    {
        $this->rating = $rating;
        $this->name = $name;
        $this->price = $price;
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
}