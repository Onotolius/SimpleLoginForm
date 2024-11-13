<?php
//TODO - fix it 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (empty($email) || empty($password)) {
        exit("Ошибка, данные формы не были заполныены");
        header('Location: ../index.php');
    }
    echo "This is login: $email" . "<br>";
    echo "This is pass: $password" . "<br>";
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}