<?php

function reverse($string){
    $string = strrev($string);
    return $string;
}

function cap ($string){
    $string = strtoupper($string);
    return $string;
}

function low ($string) {
    $string = strtolower($string);
    return $string;
}

function palend ($string) {
    if ($string == strrev($string) ) {
        return strtoupper($string);
    }
    else {
        return strtolower($string);
    }
}


