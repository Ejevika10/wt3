<?php


$dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = 0;

    // проверям логин
    if (!preg_match('/\w+@\w+\.\w+/', $_POST['login'])) {
        $err++;
        echo "<script>alert(\"Логин может состоять только из букв английского алфавита и цифр.\");window.location='authorization.php';</script>";
    }
    // проверяем, не сущестует ли пользователя с таким именем
    $sql = "SELECT * FROM authorization";
    $result = $dbh->query($sql);

    while ($row = $result->fetch()) {
        if ($row['user_login'] == $_POST['login']) {
            $err++;
            echo "<script>alert(\"Пользователь с таким логином уже существует в базе данных.\");window.location='authorization.php';</script>";
        }
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if ($err == 0) {

        $login = $_POST['login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        $query = "INSERT INTO authorization (user_login,user_password,user_hash) VALUES (:login,:password,:hash)";
        $params = [
            ':login' => $login,
            ':password' => $password,
            ':hash' => ''
        ];
        $stmt = $dbh->prepare($query);
        $stmt->execute($params);
        echo "<script>alert(\"Вы зарегестрированы.\");window.location='entrance.php';</script>";

    } else {
        echo "<script>alert(\"Что-то пошло не так.\");window.location='authorization.php';</script>";

    }
}
