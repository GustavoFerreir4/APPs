<?php

spl_autoload_register('autoloadClasses');

function autoloadClasses($filename){
    $path = "../classes/";
    $extension = ".class.php";
    $fullpath = $path . $filename . $extension;

    include_once $fullpath;
}