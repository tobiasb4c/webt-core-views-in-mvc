<?php
namespace FabiNiko\WebtCoreViewsInMvc;

class Seeder
{
    public static function generateData(): array    {
        return [
            "###HOTELS###" => [
                new Hotel("1.0", "Bogo Hotel", "99€", "templates/hotels/hotel.jpg", "templates/hotels/hotel.html"),
                new Hotel("2.0", "Wien Hotel - das schlechteste Hotel jemals", "10000€", "templates/hotels/hotel.jpg", "templates/hotels/hotel.html"),
                new Hotel("2.0", "Apfel Hotel - Apfel zum besten Preis", "2€", "templates/hotels/hotel.jpg", "templates/hotels/hotel.html"),
                new Hotel("5.0", "HTL3R Hotel", "1€", "templates/hotels/hotel.jpg", "templates/hotels/hotel.html"),
            ],
            "###TITEL###" => "Hotel-Infosite",
        ];
    }
}
