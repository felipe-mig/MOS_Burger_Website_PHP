<?php
include_once('../functions/functions.php');
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
</head>
<body onload= "bounce()">
<script>
    function bounce(){
        window.location.href = "../index.php";
    }
    
</script>
</body>
</html>