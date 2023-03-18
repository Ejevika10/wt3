<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Order.css";
$content = 'Order.html.twig';
echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content
]);