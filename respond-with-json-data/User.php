<?php
class User {
	public $first_name = "Joseph";
	public $last_name = "Mtinangi";
	private $password = "jmtinangi";
}

$user = new User();

echo json_encode($user);