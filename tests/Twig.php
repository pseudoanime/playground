<?php

require_once 'vendor/autoload.php';

function callTwig()
{

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]);

    $template = $twig->load('index.html');

    $names = ["1", "2","3"];

    foreach ($names as $name) {
        echo $template->render(['name' => $name]);
    }


}