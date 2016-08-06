<?php 
namespace App\Models;


class LoginModel {
	public function login($username, $password) {
		$userMdl = new Users();
		$user = $userMdl->getUser($username);

		if(empty($user)) {
			return false;
		}

		if($user['password'] == md5($password)) {
			session_start();
			$_SESSION['user'] = $user['username'];
			return true;
		} else {
			return false;
		}

		return false;

	}
}
 ?>
