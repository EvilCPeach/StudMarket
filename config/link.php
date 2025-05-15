<?php
    $username = 'root';
    $password = '';
    $database = 'Studmarket';
    $hostname = 'localhost';
    $dsn = "mysql:host=$hostname;dbname=$database";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $link = new PDO($dsn,$username,$password,$options);
?>
