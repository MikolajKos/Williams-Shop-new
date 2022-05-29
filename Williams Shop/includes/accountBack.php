<?php

session_start();
include_once 'dbh.inc.php';
$backURL = "http://localhost/Williams%20shop/pages/account.php";

if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
{
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $login = $_SESSION['username'];
        $password = $_SESSION['password'];

        $userInfoQuery = "SELECT * FROM user WHERE user_login = '$login' AND user_password = '$password';"; 
        $result = mysqli_query($conn, $userInfoQuery);

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $_SESSION['telephone'] = $row['telephone'];
                $_SESSION['address'] = $row['address'];
                $_SESSION['email'] = $row['email'];
            }
        }
    }
       
}
header("Location:".$backURL);