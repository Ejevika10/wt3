<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Order.css";
$content = 'Order.html.twig';
$title = 'Order';

$myOrders = array();

if (isset($_COOKIE['is_login']) && ($_COOKIE['is_login'] == 'true'))
    {
        $is_login = 'true';
        $myId = intval($_COOKIE['id']);
        $dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");
        $sql = "SELECT * FROM myorder WHERE `user_id` = $myId ";
        $result = $dbh->query($sql);
        while($row = $result->fetch()){
            $myOrders[] = $row;
        }}
else{
    $is_login = 'false';
}

echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'title' => $title,
    'myOrders' => $myOrders,
    'is_login' => $is_login
]);
