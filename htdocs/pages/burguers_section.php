<?php
include_once('../functions/functions.php');
session_start();
$_SESSION['total'] = 0;
# user id
// $user_id = session_id();
// echo '<strong>User Id: </strong>' .$user_id;
// echo '<br>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mos Burger</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @font-face {
            font-family: japanRegular;
            src: url(../fonts/Japan-pPaZ.ttf);
        }
        @font-face {
            font-family: japanBold;
            src: url(../fonts/JapanBold-Dxw0.ttf);
        }
        @font-face {
            font-family: frostyBold;
            src: url(../fonts/Gosmicksans-wGJ6.ttf);
        }
        @font-face {
            font-family: frostyRegular;
            src: url(../fonts/Gosmicksans-wGJ6.ttf);
        }
    </style>
</head>
<body>
<header>
        <!-- logo -->
        <a href="../index.php"><div class="logo"></div></a>
        <!-- home -->
         <ul>
            <li><a href="../index.php"><i class="fa fa-home" id="homeIcon" style="font-size: 2.5em;"></i></a></li>
         </ul>
        <!-- start order button -->
         <a href="viewOrder_section.php"><div class="startOrderButton">Go to Checkout</div></a>
    </header>
    <br>
    <div class="secondaryNavbar">
    <ul>
        <strong><li style="margin-left: 0vw;"><a href="burguers_section.php">Burgers</a></li></strong>
        <li><a href="drinks_section.php">Drinks</a></li>
        <li><a href="sides_section.php">Sides</a></li>
        <li><a href="desserts_section.php">Desserts</a></li>
        <li><a href="viewOrder_section.php">View Order</a></li>
    </ul>
    </div>
    <br> <br>
    <div class="formsContainer">
    <a href="drinks_section.php"><i class="fa fa-arrow-circle-right" id="arrowCircleRight"></i></a>
        <!-- Form 1 -->
        <form method="POST" action="drinks_section.php">
            <div class="formImage" id="burger1"></div>
            <br>
            <label>Wagyu Hokkaido Cheese</label>
            <label class="labelPrice">$9</label>
            <br>
            <p class="formP">A patty made with 100% domestically produced Wagyu beef, offering an exceptional meaty texture and rich flavor. It’s topped with a blend of cheeses, including Cheddar sourced from Hokkaido.</p>
            <br>
            <select name="burgerPrice">
                <option value="9">1</option>
                <option value="18">2</option>
                <option value="27">3</option>
                <option value="36">4</option>
                <option value="45">5</option>
            </select>
            <br>
            <button type="submit" name="burger" value="Wagyu Hokkaido Cheese">Add to order</button>
            <br>
        </form>
        <!-- Form 2 -->
        <form method="POST" action="drinks_section.php">
            <div class="formImage" id="burger2"></div>
            <br>
            <label>MOS Burger</label>
            <label class="labelPrice">$6</label>
            <br>
            <p class="formP">Back to our pioneer- MOS Burger that opens up everyone’s heart! Sink your teeth into luscious buns and juicy meats sauce together with our beef patty~</p>
            <br>
            <select name="burgerPrice">
                <option value="6">1</option>
                <option value="12">2</option>
                <option value="18">3</option>
                <option value="24">4</option>
                <option value="30">5</option>
            </select>
            <br>
            <button type="submit" name="burger" value="MOS Burger">Add to order</button>
            <br>
        </form>
        <!-- Form 3 -->
        <form method="POST" action="drinks_section.php">
            <div class="formImage" id="burger3"></div>
            <br>
            <label>Yakiniku Rice Burger</label>
            <label class="labelPrice">$4</label>
            <br>
            <p class="formP">Take a generous helping of barbequed beef slices. Dip them in a special Yakiniku sauce. Top if off with fresh, crunchy, sunny lettuce. </p>
            <br>
            <select name="burgerPrice">
                <option value="4">1</option>
                <option value="8">2</option>
                <option value="12">3</option>
                <option value="16">4</option>
                <option value="20">5</option>
            </select>
            <br>
            <button type="submit" name="burger" value="Yakiniku Rice Burger">Add to order</button>
            <br>
        </form>
    </div>
    <br><br>
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