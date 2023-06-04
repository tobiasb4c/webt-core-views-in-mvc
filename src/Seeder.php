<?php
namespace Tobi\Mvc;

use Tobi\Mvc\Hotel;

class Seeder
{
    public static function generateData(): array    {
        return [
            "###HOTELS###" => [
                new Hotel("1.0", "Bogo Hotel", "99€"),
                new Hotel("2.0", "Wien Hotel - das schlechteste Hotel jemals", "10000€"),
                new Hotel("2.0", "Apfel Hotel - Apfel zum besten Preis", "2€"),
                new Hotel("5.0", "HTL3R Hotel", "1€"),
            ],
            "###TITEL###" => "Hotel-Infosite",
        ];
    }
}
