<?php
    session_start();

    if(!isset($_COOKIE['login_status']) || $_COOKIE['login_status']==0)
    {
        $loginURL = "http://localhost/Williams%20shop/pages/login.php";
        header("Location:".$loginURL);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/logotype.png">
    <script defer src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <?php
            include_once '../includes/header.php';
        ?>

        <div class="header-child-pages">

            <div class="header-child-pages-inside">
                <p id="my-account-heading">Moje konto</p>
                <hr style="width:30px;">
                <div class="my-account-bread-crumbs">
                <a href="index.php">Strona główna</a> / <a href="#">Moje konto</a>
                </div>
            </div>
            
        </div>

    </header>

    <main class="account-main">

        <div class="account-tabs2">
            <div class="account-tabs-head">
                <span class="account-tabs-toggle account-is-active tab-radius-left"><img src="../images/dashboard.png"/>Pulpit</span>
                <span class="account-tabs-toggle"><img src="../images/sent.png"/>Moje zamówienia</span>
                <span class="account-tabs-toggle"><img src="../images/location.png"/>Edytuj adres</span>
                <span class="account-tabs-toggle tab-radius-right"><img src="../images/user.png"/>Edytuj konto</span>
            </div>


            <div class="account-tab-body">
                <div class="account-tabs-content account-is-active">
                    <h2 class="account-tabs-title">Pulpit</h2>
                    <p class="account-tabs-text"></p>

                    <div class="account-dashboard">
                        <div class="account-dashboard-first-block">
                            <img class="account-profile-img" src="../images/profile.png"/>
                            <div class="user-info-account">

                                <div class="ac-div">
                                    <span class="dashboard-name">
                                        <?php
                                            if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
                                            {
                                                if(isset($_COOKIE['First_name']) && isset($_COOKIE['Last_name']))
                                                {
                                                    echo "<p class='dashboard-name-p'>".$_COOKIE['First_name']." ".$_COOKIE['Last_name']."</ br>"."</p>";
                                                }
                                                else if(!isset($_COOKIE['First_name']) && !isset($_COOKIE['Last_name']) && isset($_SESSION['username']))
                                                {
                                                    echo "<p class='dashboard-name-p'>".$_SESSION['username']."</ br>"."</p>";
                                                }
                                            }
                                            
                                        ?>
                                    </span>
                                </div>


                                <div class="ac-div">
                                    <span class="name">
                                        <?php
                                            if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
                                            {
                                                if(isset($_SESSION['email']) && $_SESSION['email'] != "")
                                                {
                                                    echo $_SESSION['email'];
                                                }
                                            }
                                        ?>
                                    </span>
                                </div>


                                <div class="ac-div">
                                    <span class="user-info">
                                        <?php
                                            if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
                                            {
                                                echo "<a class='log-out-btn' href='../includes/logOutBack.php'>LOGOUT</a>";
                                            }
                                        ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                        
                        <div class="account-dashboard-second-block">
                            <div class="info-user-table">
                                <table>
                                    <tr>
                                        <th>Company</th>
                                        <th>Contact</th>
                                        <th>Country</th>
                                    </tr>
                                    <tr>
                                        <td>Alfreds Futterkiste</td>
                                        <td>Maria Anders</td>
                                        <td>Germany</td>
                                    </tr>
                                    <tr>
                                        <td>Centro comercial Moctezuma</td>
                                        <td>Francisco Chang</td>
                                        <td>Mexico</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="account-tabs-content">
                    <h2 class="account-tabs-title">First title</h2>
                    <p class="account-tabs-text">2. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae deleniti, nam possimus natus voluptate optio! Ipsa, distinctio dolorum doloremque perferendis repellendus impedit velit ducimus repellat fugiat ipsam unde reprehenderit repudiandae perspiciatis, nostrum natus tempore eos eum nulla numquam eius. Modi dolores quo aliquid doloremque. Nostrum tempora possimus incidunt voluptate eligendi.</p>
                </div>

                <div class="account-tabs-content">
                    <h2 class="account-tabs-title">First title</h2>
                    <p class="account-tabs-text">3. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae deleniti, nam possimus natus voluptate optio! Ipsa, distinctio dolorum doloremque perferendis repellendus impedit velit ducimus repellat fugiat ipsam unde reprehenderit repudiandae perspiciatis, nostrum natus tempore eos eum nulla numquam eius. Modi dolores quo aliquid doloremque. Nostrum tempora possimus incidunt voluptate eligendi.</p>
                </div>

                <div class="account-tabs-content">
                    <h2 class="account-tabs-title">First title</h2>
                    <p class="account-tabs-text">4. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae deleniti, nam possimus natus voluptate optio! Ipsa, distinctio dolorum doloremque perferendis repellendus impedit velit ducimus repellat fugiat ipsam unde reprehenderit repudiandae perspiciatis, nostrum natus tempore eos eum nulla numquam eius. Modi dolores quo aliquid doloremque. Nostrum tempora possimus incidunt voluptate eligendi.</p>
                </div>
            </div>
        </div>

    </main>


</body>
</html>