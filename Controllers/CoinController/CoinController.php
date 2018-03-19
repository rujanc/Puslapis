<?php
do {
    $half = rand(0, 1);
    if (0 == $half) echo "<div class='herbas'>H</div><br>";
    else echo "<div class='herbas'>S</div><br>";
}
while (0 == $half);

do {
    $random = rand(1,1000);
}
while (($random % 2) == 1);