<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Order.css";
$content = 'Order.html.twig';
$title = 'Order';
if (isset($_COOKIE['is_login']) && ($_COOKIE['is_login'] == 'true'))
{$is_login = 'true';}
else{
    $is_login = 'false';
}

echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'title' => $title,
    'is_login' => $is_login
]);