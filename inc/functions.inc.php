<?php

function urlContainsPixel() {
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, 'pixel') !== false) {
        return true;
    } else {
        return false;
    }
}

function urlContainsTack() {
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, 'tack') !== false) {
        return true;
    } else {
        return false;
    }
}

?>