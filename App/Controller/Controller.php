<?php

namespace App\Controller;

abstract class Controller
{
    public static function view(string $namePage, array $data = [])
{
    $file = __DIR__ . '/../../resources/views/' . $namePage . '.html';

    if (file_exists($file)) {

        // Lê o master
        $masterPath = __DIR__ . '/../../resources/views/master.html';
        $masterContent = file_get_contents($masterPath);

        // Lê a página
        $pageContent = file_get_contents($file);

        // Injeta o conteúdo no master
        $page = str_replace('{{ content }}', $pageContent, $masterContent);

        // Substitui variáveis do $data
        foreach ($data as $key => $value) {
            $page = str_replace("{{ $key }}", $value, $page);
        }

        // Exibe
        echo $page;
    } else {
        echo "View '{$namePage}' não encontrada!(" . $file . ")";
    }
}

}
