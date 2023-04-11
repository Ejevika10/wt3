<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/entrance.css";
$content = 'entrance.html.twig';
$title ='entrance';

echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'title' => $title
]);