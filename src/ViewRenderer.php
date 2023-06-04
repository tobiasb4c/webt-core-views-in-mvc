<?php
namespace Tobi\Mvc;
require 'vendor/autoload.php';

class ViewRenderer
{
    static function renderView(string $template, array $data) : string   {
        $template = file_get_contents($template);

        foreach ($data as $key => $val) {
            if (gettype($val) == "array")   { //Schaut ob array wegen title und hotels
                $replaceText = "";

                foreach ($val as $item) {
                    $replaceText = $replaceText . <<<HOTEL
                    <figure>
                      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/U2_Stadlau_AG_s%C3%BCd_01.jpg" width="100px" height="100px">
                      <figcaption>
                          <h2>{$item->getName()}</h2>
                        <p><span>Rating </span>{$item->getRating()} Sternen</p>
                        <p>{$item->getPrice()}</p>
                      </figcaption>
                    </figure>
                    HOTEL;
                }

                $template = str_replace($key, $replaceText, $template); //ersetzt alle ###ATemplates### mit daten (Template)
            } else {
                $template = str_replace($key, $val, $template); // Titel ersetzen
            }
        }

        return $template; // Gibt fertig html text zurück an die index php
    }
}
