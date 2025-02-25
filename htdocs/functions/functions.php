<?php
// MONOKAI THEME
// shows what's in the memory
// function showMem(){
//     echo '<div style="background-color: #1F1F1F; height: 10vh; width:12.5vw; border-top: 2.5px solid #000000; border-right: 5px solid #000000; border-bottom: 5px solid #000000; border-left: 2.5px solid #000000;  display: flex; justify-content: center;  margin-left: 10vw; margin-top: 1vh; margin-bottom: 1vh;  color: #D7DDDD; border-radius: 10px;">';
//         echo '<pre>';
//         echo '<br>';
//         echo '<h4 style="color:#F92672; font-size: 1.2em;">SHOW MEMORY</h4>';
//         echo '<br>';
//         echo '<h4 style="color:#A6E22E;">Get Memory</h4>';
//         print_r($_GET);
//         echo '<br>';
//         echo '<h4 style="color:#A6E22E;">Post Memory</h4>';
//         print_r($_POST);
//         echo '<br>';
//         echo '<h4 style="color:#A6E22E;">Session Memory</h4>';
//         print_r($_SESSION);
//         echo '<br>';
//         echo '</pre>';
//         echo '<br>';
//     echo '</div>';    
// }
function showMem(){
    echo '<div>';
        echo '<pre>';
        echo '<br>';
        echo '<h4 style="color:#F92672; font-size: 1.2em;">SHOW MEMORY</h4>';
        echo '<br>';
        echo '<h4 style="color:#A6E22E;">Get Memory</h4>';
        print_r($_GET);
        echo '<br>';
        echo '<h4 style="color:#A6E22E;">Post Memory</h4>';
        print_r($_POST);
        echo '<br>';
        echo '<h4 style="color:#A6E22E;">Session Memory</h4>';
        print_r($_SESSION);
        echo '<br>';
        echo '</pre>';
        echo '<br>';
    echo '</div>';    
}

?>