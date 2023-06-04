<?php
namespace Tobi\Mvc;
require 'vendor/autoload.php';

class ViewRenderer
{
    static function renderView(string $template, array $data) : string   {
        $template = file_get_contents($template);

        foreach ($data as $key => $val) {
            if (gettype($val) == "array")   { //Schaut ob array
                $replaceText = "";

                foreach ($val as $item) {
                    $replaceText = $replaceText . $item->render(); //Get Daten vom Modell also Hotel Klasse // item->render() ruft Methode im Modell auf die ersetzt alle Templates in hotel.html und return das. Wird dann an replace text angefügt
                }

                $template = str_replace($key, $replaceText, $template); //ersetzt alle ###A### mit daten (Template)
            } else {
                $template = str_replace($key, $val, $template); // Titel ersetzen
            }
        }

        return $template; // Gibt fertig html text zurück an die index php
    }
}
