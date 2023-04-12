<?php
// Страница разавторизации

// Удаляем куки
setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/"); // httponly !!!
setcookie("is_login", "", time() - 3600 * 24 * 30 * 12, "/");


// Переадресовываем браузер на страницу проверки нашего скрипта
header("Location: index.php");
exit;

