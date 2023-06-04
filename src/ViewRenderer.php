<?php
namespace FabiNiko\WebtCoreViewsInMvc;
require 'vendor/autoload.php';

class ViewRenderer
{
    static function renderView(string $template, array $data) : string   {
        $template = file_get_contents($template);

        foreach ($data as $key => $val) {
            if (gettype($val) == "array")   {
                $replaceText = "";

                foreach ($val as $item) {
                    $replaceText = $replaceText . $item->render();
                }

                $template = str_replace($key, $replaceText, $template);
            } else {
                $template = str_replace($key, $val, $template);
            }
        }

        return $template;
    }
}
