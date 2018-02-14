<?php

include "config.php";

echo '<title>Submit</title>';

load_config();

function submit(){
    global $rootdir;
    $filename = $_POST['head'];
    $content = $_POST['body'];
    $password = $_POST['password'];

    if (! verify($password)){
        die("Bad key.\n");
    }

    if (check_filename($filename)){
        $filepath = $rootdir.$filename.'.txt';
        #if (file_exists($filepath)){
        if (true){
            echo 'Result: '.(string)file_put_contents($filepath, $content);
        } else {
            die("Non-existent name.\n");
        }
    } elseif (substr($filename, 0, 1) === '-' and check_filename(substr($filename, 1))){
        $filepath = $rootdir.substr($filename, 1).'.txt';
        if (file_exists($filepath)){
            unlink($filepath);
            echo "Removed.\n";
        } else {
            die("Non-existent name.\n");
        }
    } else {
        die("Bad name.\n");
    }
}

echo file_get_contents('submit.html');

if (isset($_POST['submit'])){
    submit();
} else {
}

?>
