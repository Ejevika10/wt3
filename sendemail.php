<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendemail($fromemail, $fromname, $toemail, $toname, $subject, $message) {
    date_default_timezone_set("Europe/Minsk"); // устанавливаем часовую зону
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/Exception.php';
    $mail = new PHPMailer(); // инициализируем класс
    $mail->Host = 'smtp.yandex.ru'; // SMTP сервер
    $mail->Username   = $fromemail; // Логин на почте
    $mail->Password   = 'fyncvhtrvltqqsao'; // Пароль на почте

    $mail->isSMTP(); // указали, что работаем по протоколу смтп
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // порт
    $mail->SMTPAuth = true; // аутентификация включена
    $mail->CharSet = "UTF-8";
    $mail->setFrom($fromemail, $fromname); // от кого
    $mail->addReplyTo($fromemail, $fromname); // адрес и имя для ответа
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->msgHTML("<html><body>
                <h1>Здравствуйте!</h1>
                <p>$message</p>
                </html></body>");

    $mail->addAddress($toemail, $toname); // добавляем получателя и отправляем

    $mail->clearAddresses();
    $mail->clearCustomHeaders();
    $mail->clearAttachments();
    $mail->clearReplyTos(); // чистим все заголовки
}
?>
<?php
    require_once "sendemail.php";
    $sending = sendemail("impression1928@yandex.ru", "impression", "loziukvika10@gmail.com", "loziuk vika", "impression", "Вы подписались на обновления!");
    echo "<div>".$sending."</div>";
?>