<?php

namespace App\Controller;

abstract class Controller
{
    public static function view(string $namePage, array $data = [])
    {
        $file = __DIR__ . '/../../resources/views/' . $namePage . '.html';
        
        if (file_exists($file)) {
            $page = file_get_contents($file);

            foreach ($data as $key => $value) {
                $page = str_replace("{{ $key }}", $value, $page);
            }

            echo $page;
        }
    }
}
