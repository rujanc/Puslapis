<?php

$flags = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
    "Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
    "Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
    "Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
    "Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
    "Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg", ];

function getFlag($flags) {
    foreach ($flags as $country => $flag){
        $flags[$country]= sprintf('<img src="%s" height="100px">', $flag);
    }
    return $flags;
}
?>