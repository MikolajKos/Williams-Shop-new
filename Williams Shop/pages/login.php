<?php
    session_start();
    if(isset($_COOKIE['login_status']) && $_COOKIE['login_status']==1)
    {
        $accountURL = "http://localhost/Williams%20shop/pages/account.php";
        header("Location:".$accountURL);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Williams Shop</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logotype.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>
<body>



    <div class="login-main-container">
        <div class="login-panel">
            <div class="login-logo">
                <img src="../images/logotype.png" alt="logotype"/>
            </div>


            <div class="login-form">
                <div class="login-heading">Zaloguj się.</div>


                <form method="POST" action="../includes/loginBack.php">
                    <p>Login</p>
                    <input required id="inputLogin" class="input-login" name="loginUser" type="text"/> 
                    
                    <p>Hasło</p>
                    <input required id="inputPassword" class="input-login" name="passwordUser" type="text" style="margin-bottom:30px;"/> 

                    <input id="loginButton" class="login-button" type="submit" value="Zaloguj"/>

                </form>
                <button onclick="window.location.href='http://localhost/Williams%20shop/pages/register.php'" class="login-button register-login-button">REJESTRACJA</button>
                
                <?php
                    // $_SESSION['loginError'] = "asdad";
                    
                    // include_once '../includes/loginBack.php';

                    if(isset($_SESSION['loginError']))
                    {
                        echo"<div class='logRegError'>".$_SESSION['loginError']."</div>";
                    }
                ?>

                <div class="back-log-reg-btn">
                    <button onclick="window.location.href='http://localhost/Williams%20shop/pages/index.php'" class="back-to-home-btn">Strona główna</button>
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>