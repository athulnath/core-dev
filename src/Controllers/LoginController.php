<?php 
namespace App\Controllers;

class LoginController {

	public function login() {
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
	}
}
 ?>
