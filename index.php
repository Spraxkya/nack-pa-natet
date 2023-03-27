<?php
    require './inc/functions.inc.php';

    if (urlContainsPixel()) {
        include_once './tpl/pixelV.php';
    } else {
        include_once './tpl/normalV.php';
    }
?>