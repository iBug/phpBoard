<?php

include "config.php";

// $rootdir = '/home/pi/Documents/disp/';
$filename = $_GET['n'];

if (check_filename($filename)) {
	$filepath = $rootdir . $filename . '.txt';
	if (file_exists($filepath)) {
		header("Content-Type: text/plain");
		echo file_get_contents($filepath);
	} else {
		die("Non-existent name.\n");
	}
} else {
	die("Bad name.\n");
}

?>
