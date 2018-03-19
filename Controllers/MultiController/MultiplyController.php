<?php
function multiply ($number)
{
    for ($i = 0; $i <= 10; $i = $i + 1) {
        $result = $number * $i;
        echo "<td>" . $result . "<br>";
    }
}

function multitable($number)
{

    for ($i = 1; $i <= $number; $i = $i + 1) {
        echo "<tr>";
        for ($x = 1; $x <= $number; $x = $x + 1) {
            $result = $i * $x;
            echo "<td>$i x $x = $result</td>";
        }
        echo "</tr>";
    }}

    ?>
