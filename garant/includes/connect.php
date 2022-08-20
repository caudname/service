<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'root';
    $db_database = 'db_garant';

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_database) 
        or die("Ошибка " . mysqli_error($link));
?>