<?php

include "config.php";

function list_txt(){
    global $rootdir, $thelist;
    if ($handle = opendir($rootdir)){
        while (($file = readdir($handle)) !== false){
            if (substr($file, strrpos($file, '.') + 1) == 'txt'){
                $filename = substr($file, 0, -4);
                $thelist .= '<tr><td><a href="show?n='.$filename.'">'.$filename.'</a></td></tr>';
            }
        }
    }
}

list_txt();

?>

<div style="text-align: center;">
    <h3>List of texts</h3>
    <table align="center">
        <?=$thelist?>
    </table>
</div>
