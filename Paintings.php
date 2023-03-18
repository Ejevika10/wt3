<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Paintings.css";
$content = 'index.html.twig';
echo $twig->render("Paintings.html.twig", [
    'style' =>$style,
    'content' =>$content
]);