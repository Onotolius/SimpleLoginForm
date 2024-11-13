<?php
//TODO - fix it 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    echo "This is login: $email" . "<br>";
    echo "This is pass: $password" . "<br>";
    header('/index.php');
}