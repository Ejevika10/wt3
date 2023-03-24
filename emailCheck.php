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
    $file = 'email.txt';
    $pattern_email = '/\w+@\w+\.\w+/';

    $email = $_POST['email'];
    $email = clean($email);
    if(!empty($email)) {
        if (preg_match($pattern_email, $email)){
            file_put_contents($file, PHP_EOL.$email, FILE_APPEND);
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        }
        else
            echo "Введенный адрес некорректен";
    }
    else
        echo "Введите адрес";
}
?>