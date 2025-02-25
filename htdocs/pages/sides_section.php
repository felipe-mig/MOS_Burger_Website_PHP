<?php
include_once('../functions/functions.php');
session_start();

// !empty checks if the $_POST is empty and if it is true, fills it with the $_SESSION memory.
// In this way, the user has the capability to go back to any section and upgrade his order 
// without loosing the options he selected from the previous section. 

if(!empty($_POST['drink'])) {
    $_SESSION['drink']=$_POST['drink'];
    $_SESSION['drinkPrice']=$_POST['drinkPrice'];

}


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
        <li style="margin-left: 0vw;"><a href="burguers_section.php">Burgers</a></li>
        <li><a href="drinks_section.php">Drinks</a></li>
        <strong><li><a href="sides_section.php">Sides</a></li></strong>
        <li><a href="desserts_section.php">Desserts</a></li>
        <li><a href="viewOrder_section.php">View Order</a></li>
    </ul>
    </div>
    <br> <br>
    <div class="formsContainer">
    <a href="desserts_section.php"><i class="fa fa-arrow-circle-right" id="arrowCircleRight"></i></a>
        <!-- Form 1 -->
        <form method="POST" action="desserts_section.php">
            <div class="formImage" id="side1"></div>
            <br>
            <label>Teriyaki Mayo Fries</label>
            <label class="labelPrice">$5</label>
            <br>
            <p class="formP">Welcome to the MOS Fries Party! Enjoy our French Fries with our classic MOS teriyaki beef sauce, drizzled with mayo. The umami goodness of teriyaki sauce is finely tuned to create an exquisite taste, oishi!</p>
            <br>
            <select name="sidePrice">
                <option value="5">1</option>
                <option value="10">2</option>
                <option value="15">3</option>
                <option value="20">4</option>
                <option value="25">5</option>
            </select>
            <br>
            <button type="submit" name="side" value="Teriyaki Mayo Fries">Add to order</button>
            <br>
        </form>
        <!-- Form 2 -->
        <form method="POST" action="desserts_section.php">
            <div class="formImage" id="side2"></div>
            <br>
            <label>Hokkaido Croquette Pie</label>
            <label class="labelPrice">$4</label>
            <br>
            <p class="formP">Made of premium potatoes from clear skied Hokkaido, tender carrots and golden corn, it takes you around the world in just one bite!</p>
            <br>
            <select name="sidePrice">
                <option value="4">1</option>
                <option value="8">2</option>
                <option value="12">3</option>
                <option value="16">4</option>
                <option value="20">5</option>
            </select>
            <br>
            <button type="submit" name="side" value="Hokkaido Croquette Pie">Add to order</button>
            <br>
        </form>
        <!-- Form 3 -->
        <form method="POST" action="desserts_section.php">
            <div class="formImage" id="side3"></div>
            <br>
            <label>French Fries</label>
            <label class="labelPrice">$3</label>
            <br>
            <p class="formP">Made of premium potatoes.</p>
            <br>
            <select name="sidePrice">
                <option value="3">1</option>
                <option value="6">2</option>
                <option value="9">3</option>
                <option value="12">4</option>
                <option value="15">5</option>
            </select>
            <br>
            <button type="submit" name="side" value="French Fries">Add to order</button>
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