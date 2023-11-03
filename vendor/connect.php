<?php

    $connect = mysqli_connect('localhost', 'root', '', 'auth_database');

    if (!$connect) {
        die('Error connect to DataBase');
    }