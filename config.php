<?php

$rootdir = '/home/pi/Documents/disp/';
$keyfile = $rootdir.'password.key';
$key = null;

function check_filename($filename){
    if (preg_match('/^\\w+$/', $filename)){
        return true;
    }
    return false;
}

function load_config(){
    global $keyfile, $key;
    $key = trim(file_get_contents($keyfile));
}

function verify($vkey){
    global $key;
    if ($key == null){
        return false;
    }
    if ($key === md5($vkey)){
        return true;
    }
    return false;
}

?>
