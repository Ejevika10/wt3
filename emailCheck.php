<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return $value;
}
?>

<?php
require_once('sendemail.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = 'email.txt';
    $pattern_email = '/\w+@\w+\.\w+/';

    $email = $_POST['email'];
    $email = clean($email);

    if(!empty($email)) {
        if (preg_match($pattern_email, $email)){
            $dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");
            $query = "INSERT INTO addr (addr) VALUES (:addr)";
            $params = [
                ':addr' => $email
            ];
            $stmt = $dbh->prepare($query);
            $stmt->execute($params);
            file_put_contents($file, PHP_EOL.$email, FILE_APPEND);
            header("Location: {$_SERVER['HTTP_REFERER']}");
            sendemail("impression1928@yandex.ru", "impression", $email, "loziuk vika", "impression", "Проверьте обновления!");
            exit();
        }
        else
            "<script>alert(\"Электронный адрес введен некоректно.\");</script>";
    }
    else
        echo "<script>alert(\"Введите адрес.\");</script>";
}
?>