<?php 

namespace App\Controller;
abstract class Controller
{
    public static function view(string $namePage)
    {
        $page = file_get_contents(__DIR__ . '/../../resources/views/' . $namePage . '.html');
        echo $page;
    }

}