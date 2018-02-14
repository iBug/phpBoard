<?php

include 'config.php';

load_config();

function chpw(){
    global $rootdir, $keyfile;
    $orig = $_POST['original'];
    $new1 = $_POST['new1'];
    $new2 = $_POST['new2'];

    if (! verify($orig)){
        die("Bad key.\n");
    }

    if ($new1 != $new2){
        die("Password mismatch.\n");
    }

    if (file_put_contents($keyfile, md5($new1))){
        echo "New password set!\n";
    } else {
        echo "Something went wrong.\n";
    }
}

echo file_get_contents('chpw.html');

if (isset($_POST['submit'])){
    chpw();
} else {
}

?>
