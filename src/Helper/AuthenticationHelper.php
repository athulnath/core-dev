<?php 
namespace App\Helper;

class AuthenticationHelper {

	public static function isLoggedIn() {
		session_start();
		return isset($_SESSION['user']);
	}

	public static function loggedOut() {
		session_start();
		session_destroy();
		return true;
	}
}
 ?>
