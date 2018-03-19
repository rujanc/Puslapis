<?php
function age($amzius){
    if ($amzius>=21){
        echo $amzius . "<br>";
    }
    else {
        echo "nepilnametis <br>";
    }

    $value= 13;
    if ($value>20) {
        echo "daugiau nei 20 <br>";
    }
    else if ($value == 20)
    {
        echo "lygu 20 <br>";
    }
    else {
        echo "maziau uz 20 <br>";
    }
}
?>