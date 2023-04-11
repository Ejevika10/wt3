<?php


$dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $err = [];

    // проверям логин
    if (!preg_match('/\w+@\w+\.\w+/', $_POST['login'])) {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $sql = "SELECT * FROM authorization";
    $result = $dbh->query($sql);

    while ($row = $result->fetch()) {
        if ($row['user_login'] == $_POST['login'])
            $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if (count($err) == 0) {

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
        header("Location: Order.php");
        exit();
    } else {
        "<script>alert(\"Что-то пошло не так.\");</script>";
    }
}
