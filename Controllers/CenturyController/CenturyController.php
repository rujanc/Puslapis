<?php
function century($num)
{
    if ($num % 100 === 0) {
        echo $num / 100;
    } else {
        echo (int)($num / 100) + 1;
    }
}