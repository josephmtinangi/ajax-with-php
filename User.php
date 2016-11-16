<?php
class User {
	public $first_name;
	public $last_name;
	public $bio;

	private $password;

	public function User($first_name, $last_name, $bio)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->bio = $bio;
	}
}

$first_name = 'John';
$last_name = 'Doe';
$bio = 'Tanto face forwards spook claymore mine dome meta-shoes stimulate rain. Sub-orbital girl fluidity Shibuya computer semiotics augmented reality media hacker. Film refrigerator bicycle computer skyscraper lights Legba savant corrupted order-flow nano-pistol. ';

$user = new User($first_name, $last_name, $bio);

echo json_encode($user);