<?php
function picture($number){
    for($break=1; $break<=$number; $break++){
        echo "<br>";
        for($dot=1; $dot<=$break; $dot++){
            echo "*";
        }
    }
    for($break=$number; $break>=1; $break--){
        echo "<br>";
        for($dot=1; $dot<=$break; $dot++){
            echo "8";
        }
    }
}