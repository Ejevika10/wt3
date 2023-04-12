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
    $pattern_email = '/\w+@\w+\.\w+/';
    $pattern_telephone = '/((8[\- ]?\(?\d{3}\)?)|(\+375[\- ]?\(?\d{2}\)?))([\- ]?\d){7}$/';
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $message = preg_replace('/(https?:\/\/\S*(?!bsuir\.by)\S+)/', '#Внешние ссылки запрещены#', $message);
    $email = clean($email);
    $telephone = clean($telephone);
    $message = clean($message);
    if (isset($_COOKIE['is_login']) && ($_COOKIE['is_login'] == 'true'))
    {
        if(!empty($email) && !empty($telephone)) {
            if (preg_match($pattern_email, $email)){
                if (preg_match($pattern_telephone, $telephone)){
                    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK)
                    {
                        // get details of the uploaded file
                        $fileTmpPath = $_FILES['file']['tmp_name'];
                        $fileName = $_FILES['file']['name'];
                        $fileSize = $_FILES['file']['size'];
                        $fileType = $_FILES['file']['type'];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));

                        // check if file has one of the following extensions
                        $allowedfileExtensions = array('jpg', 'png', 'jpeg');

                        if (in_array($fileExtension, $allowedfileExtensions))
                        {
                            // directory in which the uploaded file will be moved
                            $dest_path = dirname(__FILE__) .'/uploaded_files/'.$_FILES['file']['name'];
                            $dbh = new PDO("mysql:host=localhost;dbname=impression", "root", "1234");
                            $query = "INSERT INTO myorder (user_id,user_email,user_num,img,description) VALUES (:user_id,:user_email,:user_num,:img,:description)";
                            $params = [
                                ':user_id' => intval($_COOKIE['id']),
                                ':user_email' => $email,
                                ':user_num' => $telephone,
                                ':img' => $_FILES['file']['name'],
                                ':description' => $message
                            ];
                            $stmt = $dbh->prepare($query);
                            $stmt->execute($params);
                            file_put_contents($file, $telephone . ', ' . $email . ', ' . $message . PHP_EOL, FILE_APPEND);

                            if(move_uploaded_file($fileTmpPath, $dest_path))
                            {
                                echo "<script>alert(\"Файл загружен.\");window.location='Order.php';</script>";
                            }
                            else
                            {
                                echo "<script>alert(\"Что-то пошло не так.\");window.location='Order.php';</script>";
                            }
                        }
                        else
                        {
                            echo "<script>alert(\"Что-то пошло не так.\");window.location='Order.php';</script>";
                        }
                    }
                    else
                    {
                        echo "<script>alert(\"Что-то пошло не так.\");window.location='Order.php';</script>";
                    }

                }
                else
                    echo "<script>alert(\"Номер телефона введен некоректно.\");window.location='Order.php';</script>";
            }
            else
                echo "<script>alert(\"Электронный адрес введен некоректно.\");window.location='Order.php';</script>";
        }
        else{
            echo "<script>alert(\"Заполните форму.\");window.location='Order.php';</script>";
            //header("Location: Order.php");
        }
    }
    else{
        echo "<script>alert(\"Заказ доступен только для авторизированных пользователей.\");window.location='entrance.php';</script>";
    }



}
?>