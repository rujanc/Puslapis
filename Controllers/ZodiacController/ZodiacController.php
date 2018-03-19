<?php
function getZodiac($year) {

    switch ($year % 12):
        case 1: return 'Monkey';
        case 2: return 'Rooster';
        case 3: return 'Dog';
        case 4: return 'Boar';
        case 5: return 'Rat';
        case 6: return 'Ox';
        case 7: return 'Tiger';
        case 8: return 'Rabit';
        case 9: return 'Dragon';
        case 10: return 'Snake';
        case 11: return 'Horse';
        case 12: return 'Lamb';
    endswitch;

}