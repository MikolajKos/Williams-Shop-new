<?php
    session_start();
?>

<html lang="pl">
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
    
    <header>
        <?php
            include_once '../includes/header.php';
        ?>
        
        <div class="header-section">
            <div class="header-section-left">
                <?php
                    if(isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 1)
                    {
                        if(isset($_COOKIE['First_name'])){
                            echo "Witaj ".$_COOKIE['First_name']."!";
                        }
                        else if(isset($_SESSION['username'])){
                            echo "Witaj ".$_SESSION['username']."!";
                        }
                        else{
                            return;
                        }
                    }
                ?>
                <div class="header-section-left-heading">KIM JESTEŚMY?</div>
                <div class="header-section-left-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus nulla. In et viverra arcu, at fermentum tellus. In urna magna, tempus eu lectus sed, auctor vulputate mi. Quisque aliquet tellus a lacus interdum, et laoreet nunc condimentum. Praesent est dui, blandit et vehicula dignissim, aliquam ut felis.</p></div>
                <button class="header-about-button">O NAS</button>
            </div>


            <div class="header-section-right">
                <div class="header-bestseller">
                    <div class="header-bestseller-image">
                        <img class="bests-img" src="../images/mac_bestseller.png">
                    </div>

                    
                    <div class="header-bestseller-price"><span class="bestseller-oldprice">13139zł</span>   9999.95zł</div>
                    <hr style="width:30px;">
                    <br>
                    <div class="header-bestseller-name">MacBook Pro 16</div>
                    <button class="bestseller-button">SPRAWDŹ OFERTĘ</button>
                </div>
            </div>

            <div class="clear-both"></div>
        </div>

    </header>


    <main>
        <div class="custom-shape-divider-bottom-1651923430">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>


        <div class="home-first-block-container">

            <div class="home-first-block-container-parent-content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget risus nulla. In et viverra arcu, at fermentum tellus. In urna magna, tempus eu lectus sed, auctor vulputate mi. Quisque aliquet tellus a lacus interdum, et laoreet nunc condimentum. Praesent est dui, blandit et vehicula dignissim, aliquam ut felis.
            </div>
          

            <div class="custom-shape-divider-bottom-1651923430">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill-second"></path>
                </svg>
            </div>
        </div>


        <div class="home-second-block-container">
            <div class="home-second-block-left">
                <img class="home-second-block-img" src="../images/pol_pl_Apple-iMac-27-5K-i5-6-core-3-1GHz-32GB-256GB-SSD-Radeon-Pro-5300-4-GB-3755_8.jpg" alt="">
            </div>


            <div class="home-second-block-right">
                <div class="home-second-block-right-heading">
                    Nasze produkty.
                </div>


                <div class="home-second-block-right-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non ultricies magna. Pellentesque sagittis sapien sed dolor maximus, at finibus odio vehicula. Donec scelerisque ultricies elit vel tempor. Mauris id hendrerit ligula, eu consequat arcu. Suspendisse id sollicitudin tellus, a blandit elit. Sed id risus ac erat ornare tristique a et lorem.
                    <br>
                    <button class="header-about-button">Sklep</button>
                </div>
            </div>
        </div>


        <div class="home-third-block-container">
            <div class="home-third-block-heading">Polecany Wybór</div>


            <div class="home-third-block-carousel"></div>
        </div>

    </main>



</body>
</html>