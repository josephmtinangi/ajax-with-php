<?php
// You can simulate a slow server with sleep
// sleep(2);

session_start();

!isset($_SESSION['Favorites']) ? $_SESSION['Favorites'] = [] : '';

function is_ajax_request() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(!is_ajax_request()) { exit; }

// extract $id
$raw_id = isset($_POST['id']) ? $_POST['id'] : '';

echo $raw_id;

// store in $_SESSION['favorite']
// return true/false

?>