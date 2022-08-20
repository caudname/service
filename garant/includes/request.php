<?php
    require("connect.php");
    $fio = $_POST["fio"];
    $phone = $_POST["phone"];
    if (isset($_POST["request"])) {
        $query = mysqli_query($link, "INSERT INTO requests (request_fio, request_phone) VALUES ('$fio', '$phone')");
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
?>