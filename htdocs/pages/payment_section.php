<?php
include_once('functions/functions.php');
session_start();
// # user id
// $user_id = session_id();
// echo '<strong>User Id: </strong>' .$user_id;
// echo '<br>';
// print_r($_SESSION);
session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
            @font-face {
            font-family: frostyBold;
            src: url(../fonts/Gosmicksans-wGJ6.ttf);
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
    </header>
    <br><br><br>
        <div class="mosImage"></div>
        <h3 class="h3PaymentSection">Enjoy Your Meal!</h3>
</body>
<script>
        function bounce(){
            window.location.href = "../index.php";
        }
        setTimeout(bounce, 2000);
    </script>
</html>