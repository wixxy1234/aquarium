<?php

// ЗАЩИТА ОТ DDOS-АТАК
session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$now = time();
$limit = 5; 
$timeFrame = 60; 

// Инициализация массива, если его еще нет
if (!isset($_SESSION['registration_requests'])) {
    $_SESSION['registration_requests'] = [];
}

// Удаление старых запросовadd
$_SESSION['registration_requests'] = array_filter($_SESSION['registration_requests'], function($timestamp) use ($now, $timeFrame) {
    return ($now - $timestamp) < $timeFrame;
});

// Добавление текущего запроса
$_SESSION['registration_requests'][] = $now;

// Проверка лимита
if (count($_SESSION['registration_requests']) > $limit) {
    http_response_code(429); // Too Many Requests
    exit('Слишком много попыток регистрации. Пожалуйста, попробуйте позже.');
}



$db = new mysqli("localhost", "root", "", "aquarium");


$login = filter_var(trim($_POST['login']));
$email = filter_var(trim($_POST['email']));
$pass = md5('njkgj'.filter_var(trim($_POST['pass'])));


$db -> query("INSERT INTO `users` (`loginUser`, `emailUser`, `passUser`, `roleUser` ) VALUES ('$login', '$email', '$pass', 2)");
$db -> close();

header("Location: /");


?>