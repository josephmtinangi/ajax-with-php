<?php
// You can simulate a slow server with sleep
// sleep(2);

function is_ajax_request() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

$length = isset($_POST['length']) ? (int) $_POST['length'] : 0;
$width = isset($_POST['width']) ? (int) $_POST['width'] : 0;
$height = isset($_POST['height']) ? (int) $_POST['height'] : 0;

$volume = $length * $width * $height;

if (is_ajax_request()) {
	echo $volume;
} else {
	// echo 'Not Ajax request';
	exit;
}

?>