<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/History.css";
$content = 'History.html.twig';
echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content
]);