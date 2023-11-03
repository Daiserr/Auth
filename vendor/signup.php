<?php

    session_start();
    require_once 'connect.php';

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    mysqli_query($connect, "INSERT INTO `user` (`id`, `surname`, `name`, `patronymic`, `email`, `login`, `password`) VALUES (NULL, '$surname', '$name', '$patronymic', '$email', '$login', '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../profile.php');

?>
