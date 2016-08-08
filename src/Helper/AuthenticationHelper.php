<?php 
namespace App\Helper;

class AuthenticationHelper {

	public static function isLoggedIn() {
		if(!isset($_SESSION)) {
			session_start();
		}
		return isset($_SESSION['user']);
	}

	public static function loggedOut() {
		if(!isset($_SESSION)) {
			session_start();
		}
		session_destroy();
		return true;
	}
}
 ?>
