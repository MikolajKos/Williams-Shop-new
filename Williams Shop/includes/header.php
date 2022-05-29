<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="header-container">
        <div class="logo">
            <a href="../pages/index.php"><img style="max-height: 100px; padding-left:0px;" src="../images/logotype.png"></a>
        </div>


        <div class="menu">
            <a class="menu-link" href="http://localhost/Williams%20shop/pages/index.php">Home</a>
            <a class="menu-link" href="http://localhost/Williams%20shop/pages/shop.php">Shop</a>
            <a class="menu-link" href="http://localhost/Williams%20shop/pages/about.php">About</a>
            <a class="menu-link" href="http://localhost/Williams%20shop/pages/contact.php">Contact</a>
        </div>


        <div class="cart_account">

            <form class="cart_account-form" method="POST" action="cart.php">
                <div class="cart-img">
                    <button class="header-icons"><img style="height:25px;" src="../images/koszyk_ikona.png" alt=""></button>
                </div>
            </form>


            <!-- <form class="cart_account-form" method="POST" action="login.php"> -->

            <div class="cart_account-form">
                <?php
                    if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
                    {
                        echo "<div class='login-img'><a href='account.php' class='header-icons'><img style='height:25px;' src='../images/login-ikona-true.png' alt=''></a></div>";
                    }
                    else if(!isset($_COOKIE['login_status']) || $_COOKIE['login_status'] == 0)
                    {
                        echo "<div class='login-img'><a href='login.php' class='header-icons'><img style='height:25px;' src='../images/login-ikona.png' alt=''></a></div>";
                    }
                ?>
            </div>
            <!-- </form> -->

        </div>
    </div>

</body>
</html>