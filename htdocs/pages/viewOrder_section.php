<?php
include_once('../functions/functions.php');
session_start();

// # Order number varible
$user_id = session_id();
// echo '<strong>User Id: </strong>' .$user_id;
// echo '<br>';

// !empty checks if the $_POST is empty and if it is true, fills it with the $_SESSION memory.
// In this way, the user has the capability to go back to any section and upgrade his order 
// without loosing the options he selected from the previous section.  

if(!empty($_POST['dessert'])) {
    $_SESSION['dessert']=$_POST['dessert'];
    $_SESSION['dessertPrice']=$_POST['dessertPrice'];
}

# TOTAL:
$_SESSION['total']= $_SESSION['burgerPrice']+ $_SESSION['drinkPrice'] + $_SESSION['sidePrice'] + $_SESSION['dessertPrice'];



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
    </header>
    <br>
    <div class="secondaryNavbar">
        <ul>
            <li style="margin-left: 0vw;"><a href="burguers_section.php">Burgers</a></li>
            <li><a href="drinks_section.php">Drinks</a></li>
            <li><a href="sides_section.php">Sides</a></li>
            <li><a href="desserts_section.php">Desserts</a></li>
            <strong><li><a href="viewOrder_section.php">View Order</a></li></strong>
        </ul>
    </div>
    <br><br>
    <div class="orderContainer">
        <br>
        <p><strong>-Burger:</strong><?php echo ' '; echo $_SESSION['burger'];?></p>
        <div class="itemPrice">
            <?php 
                echo '  $'; echo $_SESSION['burgerPrice'];
            ?>
        </div>
        <br><br>
        <p><strong>-Drink:</strong><?php echo ' '; echo $_SESSION['drink'];?></p>
        <div class="itemPrice">
            <?php 
                echo '  $'; echo $_SESSION['drinkPrice'];
            ?>
        </div>
         <br><br>
        <p><strong>-Side:</strong><?php echo ' '; echo $_SESSION['side'];?></p>
        <div class="itemPrice">
            <?php 
                echo '  $'; echo $_SESSION['sidePrice'];
            ?>
        </div>
         <br><br>
        <p><strong>-Dessert:</strong><?php echo ' '; echo $_SESSION['dessert'];?></p>
        <div class="itemPrice">
            <?php 
                echo '  $'; echo $_SESSION['dessertPrice'];
            ?>
        </div>
        <br><br>
        <?php
        echo '
        <hr>
        <br>
        <p id="totalP">total: $'.$_SESSION['total'].'</p>
        <br><br>
        ';
        ?>
        <p>Order:<?php echo ' '; echo $user_id;?></p>
        <br><br>
    </div>
    <div class="checkoutButtonsContainer">
        <a href="payment_section.php"><div class="checkoutButton">Payment</div></a>
        <a href="session_unset.php"><div class="cancelButton">Cancel</div></a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
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