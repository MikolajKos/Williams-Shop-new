<?php

if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
{
    setcookie(
        'login_status',
        true,
        time()-1,
        '/'
    );

    $homeURL = "http://localhost/Williams%20shop/pages/index.php";
    header("Location:".$homeURL);
}