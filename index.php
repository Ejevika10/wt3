<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Main.css";
$content = 'index.html.twig';
echo $twig->render("base.html.twig", [
    'style' =>$style,
    'content' =>$content
]);