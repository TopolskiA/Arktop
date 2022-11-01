<!DOCTYPE HTML>
<html lang="pl">
    <head>
    <meta charset="UTF-8">
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146402516-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146402516-1');
</script>
<!-- Reklamy Google 
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8780474401740685",
    enable_page_level_ads: true
  });
</script>
-->
        
        
        <title>ArkTop 
        <?php
        $site = (isset($_GET['p'])) ? $_GET['p'] : ' - home';

        switch ($site) {
            case 'home' : echo ' - Photo & Graphic';
                break;
            case 'about' : echo ' - O mnie';
                break;
            case 'services' : echo ' - Oferta';
                break;
            case 'contact' : echo ' - Kontakt';
                break;
            case 'blog' : echo ' - Blog';
                break;
            case 'certificate' : echo ' - Certyfikaty';
                break;
            case 'portfolio' : echo ' - Grafika';
                break;
            case 'galeria-photo' : echo ' - Fotografia';
                break;                            
            default: echo ' ';
                break;
        }
        ?>
        
        
        
        
        </title>
        <meta name="viewport" content="width=device-width">
        
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Grafik, Arkadiusz, Topolski, ArkTop, Photo, Graphic, fotografia, fotograf, grafika, logo, wizytówki, plakat, ulotki, photographer, graphic, designer, Polska, Toruń, Radziejów, Bydgoszcz, Kujawsko, Pomorskie, dojazd, teraz, dostępny"/>
        <meta name="description" content="ArkTop Photo & Graphic. Usługi fotograficzne i graficzne wykonywane indywidualnie. Usługi wykonuje Arkadiusz Topolski"/>
        <meta property="og:title" content="ArkTop Photo & Graphic">
        <meta property="og:image" content="https://arktop.pl/images/galeria/iv/03AT.jpg" />
<meta property="og:type" content="image/jpeg" />
<meta property="og:image:width" content="1920" />
<meta property="og:image:height" content="1024" />
<meta property="og:image:alt" content="ArkTop Photo & Graphic. Usługi fotograficzne i graficzne wykonywane indywidualnie." />
<meta property="og:url" content="https://arktop.pl/" />
<meta property="og:site_name" content="ArkTop" />
<meta property="og:description" content="Usługi fotograficzne i graficzne wykonywane indywidualnie." />
<meta property="fb:page_id" content="ArkTopPhotoGraphic" />
<meta name="theme-color" content="#e25a20">
        
        <!--=============== css  ===============-->	
        <link href="css/reset.css" rel="stylesheet" >
                <link href="css/yourstyle.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <!--<link href="./css/plugins.css" rel="stylesheet" > -->
        <!--=============== +FONT  ===============-->
        <link href="css/all.css" rel="stylesheet" /> <!--load all styles -->
        
        <link href="css/newphoto.css" rel="stylesheet">
        <!--=============== favicons ===============-->
        <link media rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/logo192.png">
        
        

<link rel="preconnect" href="https://www.google.com">
<link rel="preconnect" href="https://www.google.pl">
<link rel="preconnect" href="https://stats.g.doubleclick.net">
<link rel="preconnect" href="https://www.google-analytics.com">

<link rel="manifest" href="manifest.json"/>
    
    </head>
    <body>
    <!--=============== header ===============-->
            <header>
            <h1 class="v-h">Header</h1>
                <!-- Nav button-->
                <div class="nav-button">
                <a href="#" class="icon" onclick="Navactiv()" aria-label="Menu">
                  <div class="hamburger">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                  </div>   
                </a>
                </div> 
                <!-- Nav button end -->
                <!-- Logo--> 
                <div class="logo-holder">
                    <a href="./" class="ajax"><img src="images/logoSVG.svg" alt="Arkadiusz Topolski"></a>
                </div>
                <!-- Logo  end--> 
                <!-- Header  title --> 
                <div class="header-title">
                    
                </div>
                <!-- Header  title  end-->
                <!-- share -->
               <!-- <div class="show-share isShare">
                    <span>Share</span>
                    <i class="fa fa-chain-broken"></i>            
                </div>
                -->
                <!-- share  end-->
                <div class="nav-overlay"></div>
                    <!--  Navigation start -->
                    <div id="navi1" class="nav-inner isDown hide">
                        <nav>
                        <h2 class="v-h">MENU</h2>
                            <ul>
                                <li>
                                    <a href="index.php" class="ajax"><h3>HOME</h3></a>
                                </li>
                                <li><a href='portfolio' class="ajax"><h3>Portfolio</h3></a></li>
                                <li><a href='galeria-photo' class="ajax"><h3>Fotografia</h3></a></li>	
                                <!--<li><a href='galeria-graphic' class="ajax"><h3>Galeria grafiki</h3></a></li>-->	
                                <!--<li><a href='galeria-iv' class="ajax"><h3>Galeria Logo</h3></a></li>-->	
                                <li><a href='services' class="ajax"><h3>Oferta</h3></a></li>
                                <li><a href='contact' class="ajax"><h3>Kontakt</h3></a></li>
                                <li class="subnav"><a href='about' class="ajax"><h3>O mnie</h3></a>
                                    <ul>
                                    <li>
                                     <a href="certificate" class="ajax"><h3>Certyfikaty</h3></a>
                                    </li>
                                    </ul>
                                </li>
                               
                                <!--<li><a href='./game/index.html'><h3>Gra</h3></a></li>
                                -->
                            </ul>
                        </nav>
                    </div>				
            </header>
             <!--Header   end-->
           
            <!--=============== wrapper ===============-->		
                <!--=============== content-holder ===============-->
                
                    
                    <!--  Navigation end -->
                    <?php
        $site = (isset($_GET['p'])) ? $_GET['p'] : 'home';

        switch ($site) {
            case 'home' : include './home.php';
                break;
            case 'about' : include './about.php';
                break;
            case 'services' : include './services.php';
                break;
            case 'contact' : include './contact.php';
                break;
            case 'blog' : include './blog.php';
                break;
            case 'certificate' : include './certificate.php';
                break;
 case 'galeria' : include './galeria.php';
                break;
            case 'galeria-photo' : include './galeria-photo.php';
            echo '<script defer src="js/galeria.js"></script>';
                break;
            case 'galeria-photo_produktowe' : include './galeria-photo_produktowe.php';
                echo '<script defer src="js/galeria.js"></script>';
                break;    
            case 'galeria-graphic' : include './galeria-graphic.php';
                echo '<script defer src="js/galeria.js"></script>';
                break;
            case 'galeria-iv' : include './galeria-iv.php';
                echo '<script defer src="js/galeria.js"></script>';
                break;
            case 'portfolio' : include './portfolio.php';
                echo '<script defer src="js/portfolio.js"></script>';
                break;
            case 'portfolio-single' : include './portfolio-single.php';
                echo '<script defer src="js/portfolio.js"></script>';
                break;
            case 'galeria-photo-nowa' : include './galeria-photo-nowa.php';
            echo '<script defer src="js/portfolio.js"></script>';                   
                 break;                           
            default: include './home.php';
                break;
        }
        ?>
          
                     

                    <!-- share  
                    <div class="share-inner">
                        <div class="share-container  isShare"  data-share="['facebook','googleplus','twitter','linkedin']"></div>
                        <div class="close-share"></div>
                    </div>
                    --><!-- share end -->

                <!-- Content holder  end -->
            
            <!-- wrapper end -->
            <!--=============== footer ===============-->

            <footer>
                <div class="policy-box">
                    <span>&#169; ArkTop  /  All rights reserved. </span>
                </div>
                <div class="footer-social">
                    <ul>
                        <li><a href="https://www.facebook.com/ArkTopPhotoGraphic/" target="_blank" rel="noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i><span>facebook</span></a></li>
                        <!--<li><a href="#" target="_blank"><i class="fa fa-twitter"></i><span>twitter</span></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i><span>instagram</span></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i><span>pinterest</span></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i><span>tumblr</span></a></li>-->
                       
                    </ul>
                </div> 
            </footer>
            <!-- footer end -->
        <!--<script defer src="js/lazyload.js"></script>-->
         <script defer src="js/jquery.min.js"></script>
         <script defer src="js/myscript.js"></script>
          

    </body>
</html>