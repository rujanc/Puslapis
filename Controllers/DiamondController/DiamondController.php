<?php
function rombas($number)
{
    for ($break = 1; $break <= $number; $break++){
        for ($dot = $break; $dot <= $number; $dot++){
            echo "&nbsp;&nbsp;&nbsp;";}
        for ($dot = 2 * $break - 1; $dot > 0; $dot--){
            echo "&nbsp;*&nbsp;";
        }
        echo "<br>";
    }
    for ($break = $number; $break >= 0; $break--) {
        for ($dot = $number - $break; $dot >= 0; $dot--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($dot = 2 * $break - 1; $dot > 0; $dot--){
            echo "&nbsp*&nbsp;";
        }
        echo "<br>";}
}
?>