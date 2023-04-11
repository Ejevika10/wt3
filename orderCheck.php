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
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = 'order.txt';
    $pattern_email = '/(^@)\w+@\w+(\.\w+)+/';
    $pattern_telephone = '/((8[\- ]?\(?\d{3}\)?)|(\+375[\- ]?\(?\d{2}\)?))([\- ]?\d){7}$/';
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $message = preg_replace('/(https?:\/\/\S*(?!bsuir\.by)\S+)/', '#Внешние ссылки запрещены#', $message);
    $email = clean($email);
    $telephone = clean($telephone);
    $message = clean($message);

    if(!empty($email) && !empty($telephone)) {
        if (preg_match($pattern_email, $email)){
            if (preg_match($pattern_telephone, $telephone)){
                file_put_contents($file, $telephone . ', ' . $email . ', ' . $message . PHP_EOL, FILE_APPEND);
                header("Location: wt_3/Order.php");
                exit();
            }
            else
                echo "<script>alert(\"Номер телефона введен некоректно.\");</script>";
        }
        else
            echo "<script>alert(\"Электронный адрес введен некоректно.\");</script>";
    }
    else{
        echo "<script>alert(\"Заполните форму.\");window.location='index.php';</script>";
        //header("Location: Order.php");
    }


}
?>