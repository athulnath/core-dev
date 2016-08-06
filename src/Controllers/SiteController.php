<?php 
namespace App\Controllers;

use App\Models\LoginModel;

class SiteController extends Controller {

	public function index() {
		$this->render("login");
	}

	public function login() {
		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
		$loginModel = new LoginModel();
		if($loginModel->login($username, $password)) {
			$this->redirect("c=dashboard");
		} else {
			$this->render("login", ["name" => "athul"]);
		}
	}

	public function logout() {
		\App\Helper\AuthenticationHelper::loggedOut();
		$this->redirect("");
	}
}
 ?>
