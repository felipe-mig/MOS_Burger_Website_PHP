<?php
include_once('functions/functions.php');
session_start();
session_unset();
// $_SESSION['total'] = 0;
// # user id
// $user_id = session_id();
// echo '<strong>User Id: </strong>' .$user_id;
// echo '<br>';
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mos Burguer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        @font-face {
            font-family: japanRegular;
            src: url(fonts/Japan-pPaZ.ttf);
        }
        @font-face {
            font-family: japanBold;
            src: url(fonts/JapanBold-Dxw0.ttf);
        }
        @font-face {
            font-family: frostyBold;
            src: url(fonts/Gosmicksans-wGJ6.ttf);
        }
        @font-face {
            font-family: frostyRegular;
            src: url(fonts/Gosmicksans-wGJ6.ttf);
        }
    </style>
</head>
<body>
    <header>
        <!-- logo -->
        <a href="#"><div class="logo"></div></a>
        <!-- home -->
         <ul>
            <li><a href="#"><i class="fa fa-home" id="homeIcon" style="font-size: 2.5em;"></i></a></li>
         </ul>
        <!-- start order button -->
         <a href="pages/burguers_section.php"><div class="startOrderButton">Start Order</div></a>
    </header>
    <!-- cta -->
    <div class="cta">
        <h1>mos burguer</h1>
        <h2>MOS BURGER is a hamburger chain born and raised in Japan.</h2>
    </div>
    <!-- Content -->
     <br><br><br>
     <div class="imageContainer1">
        <div id="indexImage1"></div>
        <div id="indexImage2"></div>
     </div>   
     <h3>What is MOS BURGER?</h3>
     <br>
     <div class="balls">
        <div class="ball1"></div>
        <div class="ball2"></div>
        <div class="ball3"></div>
     </div>
     <br>
     <br>
     <p>MOS BURGER was born in a small town called Narimasu close to a big city area, Ikebukuro, Tokyo.</p>
     <br><br><br>
     <p>We created many original menus that bring out Japanese food culture using American hamburgers. Today there are about 1,300 MOS BURGERs in Japan and over 400 located overseas, mainly in Asia.</p>
     <br><br><br>
     <p>Our hamburgers feature original sauces with crispy lettuce,
     fresh tomatoes, savory patties, all made to order.</p>
     <br><br><br>
     <p>Using selected vegetables and other ingredients, we pursue delicious food and friendly service to make our customers happy.</p>
     <br><br><br><br><br>
     <footer>
            <br>
            <!--social media-->
        <div class="copy-and-terms-container">
          <div class="social-media-container">
              <a href="https://github.com/felipe-mig" target="_blank"><i class="bi bi-github" id="giticon"></i></a>
              <a href="https://www.linkedin.com/in/felipeiglesiasgarcia/" target="_blank"><i class="bi bi-linkedin" id="linkedinicon"></i></a>
          </div>
          <p id="copyright">&copy; <span style="letter-spacing: 0.5em; font-size: .8em; text-transform:uppercase">2024 Felipe Iglesias Garcia</span></p>
        </div>
    </footer>
</body>
</html>