<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "williams_shop";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Nastąpił nieoczekiwany błąd połączenia.");