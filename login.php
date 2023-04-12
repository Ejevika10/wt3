<?php
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
$dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sql = "SELECT * FROM authorization";
    $result = $dbh->query($sql);

    while ($row = $result->fetch()) {
        if ($row['user_login'] == $_POST['login'])
            $data = $row;
    }

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        $sth = $dbh->prepare("UPDATE authorization SET `user_hash` = :user_hash WHERE `user_id` = :id");
        $sth->execute(array('user_hash' => $hash, 'id' => $data['user_id']));

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/"); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: check.php");
        exit();
    }
    else
    {
        echo "<script>alert(\"Логин или пароль введены неверно.\");window.location='entrance.php';</script>";
    }
}
?>
