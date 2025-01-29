<?php

$db = new mysqli("localhost", "root", "", "aquarium");


$login = filter_var(trim($_POST['login']));
$pass = md5('njkgj' . filter_var(trim($_POST['pass'])));


$res = $db->query("SELECT * FROM `users` WHERE `loginUser` = '$login' AND `passUser` = '$pass'");

if ($res->num_rows > 0) {
    $user = $res->fetch_assoc();

    setcookie('id', $user['idUser'], time() + 3600, '/');
    setcookie('login', $user['loginUser'], time() + 3600, '/');
    setcookie('role', $user['roleUser'], time() + 3600, '/');

    $db->close();
    header("Location: /");
    exit();
} else {
    header('Location: /php/pages/aboutUs.php?error=1');
    $db->close();
    exit();
}



