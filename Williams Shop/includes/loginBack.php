<?php

include_once 'dbh.inc.php';
session_start();
$_SESSION['loginError'] = "";

$backToLogRegURL = "http://localhost/Williams%20shop/pages/login.php";

$goToPageURL = "http://localhost/Williams%20shop/pages/index.php";


if(isset($_POST['loginUser']) && isset($_POST['passwordUser']))
{
    $login = $_POST['loginUser'];
    $password = $_POST['passwordUser'];


    $query = "SELECT * FROM user WHERE user.user_login = '$login' AND user.user_password = '$password';";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {   
        while($row = mysqli_fetch_array($result))
        {
            $firstName = $row['first_name'];
            $lastName = $row['last_name']; 

            setcookie(
                'First_name',
                $firstName,
                time()+60*60*24*30,
                '/'
            );

            setcookie(
                'Last_name',
                $lastName,
                time()+60*60*24*30,
                '/'
            );

            setcookie(
                'login_status',
                true,
                time()+3600,
                '/'
            );

            $_SESSION['username'] = $row['user_login'];
            $_SESSION['password'] = $row['user_password'];
        }
        header('Location:'.$goToPageURL);
        exit;
    }
    else if(mysqli_num_rows($result) <= 0)
    {
        header('Location:'.$backToLogRegURL);
        $_SESSION['loginError'] = "<span class='errorStar'>*</span>Niepoprawny login lub hasło.";
    }
}






