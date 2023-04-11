<?php
// Скрипт проверки

// Соединямся с БД
$dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    //$query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    //$userdata = mysqli_fetch_assoc($query);

    $sql = "SELECT * FROM authorization";
    $result = $dbh->query($sql);

    while ($row = $result->fetch()) {
        if ($row['user_id'] == intval($_COOKIE['id']))
            $userdata = $row;
    }

    if(($userdata['user_hash'] !== $_COOKIE['hash']) )
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/"); // httponly !!!
        "<script>alert(\"Что-то пошло не так.\");</script>";
    }
    else
    {
        setcookie("is_login", "true", time()+60*60*24*30, "/");
        //echo $_COOKIE['is_login'];
        header("Location: index.php");
        //print "<script> is_login();</script>";
        //print "Привет, ".$userdata['user_login'].". Всё работает!";
    }
}
else
{
    print "Включите куки";
}
?>