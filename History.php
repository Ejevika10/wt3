<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "";
$content = 'History.html.twig';
$title = 'History';
echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'title' => $title
]);