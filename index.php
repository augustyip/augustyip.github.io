<?php

require_once './vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
    'auto_reload' => TRUE,
]);


$template = $twig->load('index.html');

$data = include './data.php';

echo $template->render($data);
